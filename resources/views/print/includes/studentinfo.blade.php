<div class="table-responsive">
    <table width="100%" class="table table-bordered">
        <tr>
            <td class="text-right">Reg No. : </td>
            <th class="text-left">{{ $student->reg_no }}</th>

            <td class="text-right">Name : </td>
            <th class="text-left">{{ $student->first_name.' '.$student->middle_name.' '.$student->last_name }}</th>
        </tr>

        <tr>
            <td class="text-right">Faculty/Class : </td>
            <th class="text-left">{{ ViewHelper::getFacultyTitle($student->faculty) }}</th>
            <td class="text-right">Sem./Sec. : </td>
            <th class="text-left">{{ ViewHelper::getSemesterTitle($student->semester) }}</th>
        </tr>

        <tr>
            <td class="text-right">Date of Birth : </td>
            <th class="text-left">{{ \Carbon\Carbon::parse($student->date_of_birth)->format('d-M-Y') }}</th>
           {{-- <td class="text-right">Son/Daughter of : </td>
            <td>{{$student->faculty}}</td>--}}
        </tr>
    </table>
</div>