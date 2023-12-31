<h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ $panel }} Lista</h4>
<div class="clearfix">
    <span class="pull-right tableTools-container"></span>
</div>
<div class="table-header">
    {{ $panel }}  Lista zapisa u tabeli. Filtrirajte pomoću filtera.
</div>
<!-- div.table-responsive -->
<div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>R.B.</th>
                    <th>Reg.broj</th>
                    <th>Ime studenta</th>
                    <th>Ocjena teorija</th>
                    <th>Ocjena praksa</th>
                    <th>Odsutan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($data['ledger_exist']) && $data['ledger_exist']->count() > 0)
                    @php($i=1)
                    @foreach($data['ledger_exist'] as $student)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $student->reg_no }}</td>
                            <td>{{ $student->first_name.' '.$student->middle_name.' '.$student->last_name }}</td>
                            <td>
                                @if($student->absent_theory=='0')
                                    {{ $student->obtain_mark_theory }}
                                @else
                                    <span class="label label-danger">
                                        A
                                    </span>
                                @endif
                            </td>
                            <td>
                                @if($student->absent_practical=='0')
                                    {{ $student->obtain_mark_practical }}
                                @else
                                    <span class="label label-danger">
                                        A
                                    </span>
                                @endif
                            </td>
                            <td>
                                @if($student->absent_theory=='0')
                                    <span class="label label-primary">
                                        TH-Present
                                    </span>
                                @else
                                    <span class="label label-danger">
                                        TH-Absent
                                    </span>
                                @endif

                                @if($student->absent_practical=='0')
                                    <span class="label label-primary">
                                        PR-Present
                                    </span>
                                @else
                                    <span class="label label-danger">
                                        PR-Absent
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                   <a href="{{ route($base_route.'.delete', ['exam_id' => $student->exam_schedule_id,
                                        'student_id' => $student->student_id]) }}" class="red bootbox-confirm">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="8">Podaci nisu pronađeni. Filtrirajte za prikaz. </td>
                    </tr>
                @endif
            </tbody>
        </table>
</div>
</div>
