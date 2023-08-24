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
use App\Http\Requests\Student\Notes\AddValidation;
use App\Http\Requests\Student\Notes\EditValidation;
use App\Models\Note;
use App\Models\Student;
use Illuminate\Http\Request;
use ViewHelper;
use view;

class NoteController extends CollegeBaseController
{
    protected $base_route = 'student.note';
    protected $view_path = 'student.note';
    protected $panel = 'Student napomena';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
            ->where('member_type','=','student')
            ->get();

        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function store(AddValidation $request)
    {
        $reg_no = $request->get('reg_no');

        $student = Student::select('id')->where('reg_no','=',$reg_no)->first();
        if (!$student)
            return redirect()->route('student.note')->with('message_warning', 'Molimo provjerite registarski broj. 
            Ovaj registarski broj nije važeći studentski registarski broj.');


        $request->request->add(['created_by' => auth()->user()->id]);
        $request->request->add(['member_id' => $student->id]);
        $request->request->add(['member_type' => 'student']);

       Note::create($request->all());

       $request->session()->flash($this->message_success, $this->panel. ' Kreiran uspješno.');
       return redirect()->route($this->base_route);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        $data['row'] = Note::find($id);
        if (!$data['row'])
            return parent::invalidRequest();

        $reg_no = Student::select('reg_no')->where('id','=',$data['row']->member_id)->first();
        $data['row']->reg_no = $reg_no->reg_no;
        $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
                        ->where('member_type','=','student')
                        ->get();
        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(EditValidation $request, $id)
    {
       if (!$row = Note::find($id)) return parent::invalidRequest();

        $reg_no = $request->get('reg_no');
        $student = Student::select('id')->where('reg_no','=',$reg_no)->first();
        if (!$student)
            return redirect()->route('student.note')->with('message_warning', 'Molimo provjerite registarski broj. 
            Ovaj registarski broj nije važeći studentski registarski broj.');

        $request->request->add(['last_updated_by' => auth()->user()->id]);
        $request->request->add(['member_id' => $student->id]);
        $request->request->add(['member_type' => 'student']);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Updated uspješan.');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = Note::find($id)) return parent::invalidRequest();

        $row->delete();
        $request->session()->flash($this->message_success, $this->panel.' Uspješno izbrisan.');
        return redirect()->route($this->base_route);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Note::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Note::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    $request->session()->flash($this->message_success, $request->get('bulk_action'). ' Akcija uspješna.');
                else
                    $request->session()->flash($this->message_success, 'Uspješno izbrisan.');

                return redirect()->route($this->base_route);

            } else {
                $request->session()->flash($this->message_warning, 'Molimo vas, označite barem jedan red.');
                return redirect()->route($this->base_route);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Note::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);


        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Aktivan uspješno.');
        return redirect()->route($this->base_route);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Note::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Uspješno neaktivan.');
        return redirect()->route($this->base_route);
    }
}