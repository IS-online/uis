<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Lista studenata</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Prikaz liste studenata u tabeli. Filtrirajte listu koristeći polje za pretragu po želji.
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
                    <th >R.B.</th>
                    <th>Fakultet/Odsjek</th>
                    <th>Sem./Sec.</th>
                    <th>Reg. br.</th>
                    <th>Student</th>
                    <th></th>
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
                                </td>
                                <td><a href="{{ route('student.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                                <td> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</td>
                                <td>
                                    {{ ViewHelper::getAcademicStatus($student->academic_status)}}
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $student->status == 'active'?"btn-info":"btn-warning" }}" >
                                            {{ $student->status == 'active'?"Aktivan":"Neaktivan" }}
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">Nije pronađena evidencija studenata.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


