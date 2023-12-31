<h4 class="header large lighter blue"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{ $panel }}</h4>
<div class="col-sm-3"></div>
<!-- div.table-responsive -->
<table id="studentsTable" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>R.B..</th>
            <th> </th>
            <th>Un.br.</th>
            <th>Ime studenta</th>
            <th>
                {{--Attendance Status--}}
                @foreach($data['attendance_status'] as $status)
                    <label class="pos-rel">
                        {!! Form::radio('mark-all', $status->id, false, ['class' => 'ace','id' => 'mark-'.$status->id]) !!}
                        <span class="lbl"></span> <span class="{{ $status->display_class }} btn-sm">{{$status->title}} All</span>
                    </label>
                @endforeach
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody id="student_wrapper">

    </tbody>
</table>
