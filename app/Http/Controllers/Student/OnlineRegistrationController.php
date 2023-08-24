<?php

/*
 * Mr. Umesh Kumar Yadav
 * Business With Technology Pvt. Ltd.
 * Rajbiraj-7 (Province 2, Saptari), Nepal
 * +977-9868156047
 * freelancerumeshnepal@gmail.com
 * https://codecanyon.net/item/unlimited-edu-firm-school-college-information-management-system/21850988
 */

namespace App\Http\Controllers\Student;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Student\PublicRegistration\AddValidation;
use App\Models\AcademicInfo;
use App\Models\Addressinfo;
use App\Models\AlertSetting;

use App\Models\Faculty;
use App\Models\FacultySemester;
use App\Models\GeneralSetting;
use App\Models\GuardianDetail;
use App\Models\OnlineRegistrationProgram;
use App\Models\OnlineRegistrationSetting;
use App\Models\ParentDetail;
use App\Models\Semester;
use App\Models\Student;
use App\Models\StudentAddressinfo;
use App\Models\StudentBatch;
use App\Models\StudentGuardian;
use App\Models\StudentParent;
use App\Models\StudentStatus;

use App\Models\Year;
use App\Models\Role;
use App\Traits\SmsEmailScope;
use App\Traits\UserScope;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image, URL;
use ViewHelper;

class OnlineRegistrationController extends CollegeBaseController
{
    protected $base_route = 'student.online-registration';
    protected $view_path = 'student.online-registration';
    protected $panel = 'Student';
    protected $folder_path;
    protected $folder_name = 'studentProfile';
    protected $filter_query = [];

    use SmsEmailScope;
    use UserScope;

    public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
    }

    public function registration()
    {
        if($this->checkRegistrationStatus()){
            $data = [];
            $data['blank_ins'] = new Student();

            //check Registration settions
            $data['registration_setting'] = OnlineRegistrationSetting::first();

            $existingProgram = OnlineRegistrationProgram::select('online_registration_programs.id','online_registration_programs.faculties_id',
                'online_registration_programs.start_date', 'online_registration_programs.end_date',
                'online_registration_programs.status','f.faculty','f.id as fac_id')
                ->where('online_registration_programs.start_date', '<=', Carbon::now())
                ->where('online_registration_programs.end_date', '>=', Carbon::now())
                ->join('faculties as f','f.id','=','online_registration_programs.faculties_id')
                ->get();

            if(isset($existingProgram) && $existingProgram->count() > 0){
                $facultyExceptId = $existingProgram->pluck('fac_id');
                $allFaculty = Faculty::whereIn('id',$facultyExceptId)->Active()->orderBy('faculty')->pluck('faculty','id')->toArray();
                $data['faculties'] = array_prepend($allFaculty,'Select Faculty/Class','');
            }else{
                $data['faculties'] = [];
            }


            return view(parent::loadDataToView($this->view_path.'.register'), compact('data'));
        }else{
            request()->session()->flash($this->message_warning, 'Javna registracija zatvorena.');
            return redirect()->route('login');
        }
    }

    public function register(AddValidation $request)
    {
        //RegNo Generator Start
            $oldStudent = Student::where('faculty',$request->faculty)->orderBy('id', 'desc')->first();
            if (!$oldStudent){
                $sn = 1;
            }else{
                $oldReg = intval(substr($oldStudent->reg_no,-4));
                $sn = $oldReg + 1;
            }

            $sn = substr("00000{$sn}", - 4);
            $year = intval(substr(Year::where('active_status','=',1)->first()->title,-2));
            $faculty = Faculty::find(intval($request->faculty));
            $facultyCode = $faculty->faculty_code;
            //$regNum = $faculty.'-'.$year.'-'.$sn;
            $regNum = $facultyCode.$year.$sn;
            $request->request->add(['reg_no' => $regNum]);
            //reg generator End

        $year = Year::where('active_status','=',1)->first()->title;
        //$regNum = $year.$request->faculty.$oldStudent->id;
        $request->request->add(['created_by' => 0]);
        //$request->request->add(['reg_no' => $regNum]);
        //$request->request->add(['semester' => $semSec?$semSec:0]);
        $request->request->add(['academic_status' => 8]);
        $request->request->add(['status' => 'in-active']);

       $student = Student::create($request->all());

        $request->request->add(['students_id' => $student->id]);
        $addressinfo = Addressinfo::create($request->all());
        $parentdetail = ParentDetail::create($request->all());

        $guardian = GuardianDetail::create($request->all());
        $studentGuardian = StudentGuardian::create([
            'students_id' => $student->id,
            'guardians_id' => $guardian->id,
        ]);

        //create login access
        $name = isset($request->middle_name)?$request->first_name.' '.$request->middle_name.' '.$request->last_name:$request->first_name.' '.$request->last_name;
        $rolesId = Role::where('name','student')->first()->id;

        $request->request->add(['role_id' => $rolesId]);
        $request->request->add(['hook_id' => $student->id]);
        $request->request->add(['name' => $name]);
        $password = str_random(8);
        $request->request->add(['password' => Hash::make($password)]);
        $request->request->add(['status' => 'active']);

        $user = User::create($request->all());
        $roles = [];
        $roles[] = [
            'user_id' => $user->id,
            'role_id' => $rolesId
        ];

        $user->userRole()->sync($roles);

        $PublishMessage = 'Poštovani, ' . $name.' Hvala što ste se registrovali kod nas. Vaši podaci o registraciji i lozinka za prijavu se šalju na vaš registrovani mobilni i e-mail.' ;

        /*SMS & Email Alert*/
        $alert = AlertSetting::select('sms','email','subject','template')->where('event','=','StudentRegistration')->first();
        if(!$alert){

        }else{
            //Dear {{first_name}}, you are successfully registered in our institution with RegNo.{{reg_no}}. Your login with password: {{password}} ,Thank You.
            $subject = $alert->subject;
            $message = $alert->template;
            $message = str_replace('{{first_name}}', $student->first_name, $message );
            $message = str_replace('{{reg_no}}', $student->reg_no, $message );
            $message = str_replace('{{password}}', $password, $message );
            $emailIds[] = $student->email;
            $contactNumbers[] = $addressinfo->mobile_1;

            /*Now Send SMS On First Mobile Number*/
            if($alert->sms == 1){
                $contactNumbers = $this->contactFilter($contactNumbers);
                $smssuccess = $this->sendSMS($contactNumbers,$message);
            }

            /*Now Send Email With Subject*/
            if($alert->email == 1){
                $emailIds = $this->emailFilter($emailIds);
                /*sending email*/
                $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
            }
        }

        //end sms email
        $request->session()->flash($this->message_success, $PublishMessage);
        return redirect()->route('login');
    }

    public function checkRegistrationStatus()
    {
        $data['general_setting'] = GeneralSetting::select('public_registration')->first();

        if(isset($data['general_setting']) && $data['general_setting']->public_registration ==1){
            return true;
        }else{
            return false;
        }
    }

}
