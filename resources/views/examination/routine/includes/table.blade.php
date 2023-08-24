<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;TargetExam List</h4>
        {!! Form::open(['route' => 'print-out.exam.admit-card', 'id' => 'bulk_action_form']) !!}
        <div class="clearfix">

            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ $panel }}  Popis zapisa u tabeli. Filtrirajte pomoću filtra Meho.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>R.B.</th>
                        <th>Fakultet/Odsjek</th>
                        <th>Sem./Sec.</th>
                        <th>Datum prijave</th>
                        <th>Reg. broj</th>
                        <th>Student</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($data['student']) && $data['student']->count() > 0)
                        @php($i=1)
                        @foreach($data['student'] as $student)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $student->id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>{{ $i }}</td>
                                <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                                <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                                <td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}}
                                </td>
                                <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                                <td> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</td>

                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">Nema pronađenih podataka. Filtrirajte za prikaz. </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


