<div class="table-responsive">
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>R.B,</th>
                <th>Fakultet/Odsjek</th>
                <th>Sem./Sec.</th>
                <th>Un.Br.</th>
                <th>Ime studenta</th>
                <th>Datum rođenja</th>
                {{--<th>Godina</th>--}}
            </tr>
        </thead>
        <tbody>
        @if (isset($data['student_birthday']) && $data['student_birthday']->count() > 0)
            @php($i=1)
            @foreach($data['student_birthday'] as $student)
                <tr>
                    <td>{{ $i }}</td>
                    <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                    <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                    {{--<td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}} </td>--}}
                    <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                    <td><a href="{{ route('student.view', ['id' => $student->id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                    <td>{{\Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d')}}</td>
                    {{--<td>{{\Carbon\Carbon::parse($student->date_of_birth)->age}}</td>--}}
                </tr>
                @php($i++)
            @endforeach
        @else
            <tr>
                <td colspan="7">Nema rođendana.</td>
            </tr>
        @endif
        </tbody>
        <tfoot>
            <tr>
                <td class="text-center" colspan="6">{!! $data['staff_birthday']->appends($data['filter_query'])->links() !!}</td>
            </tr>
        </tfoot>
    </table>
</div>
