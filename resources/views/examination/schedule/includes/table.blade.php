<h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ $panel }} lista</h4>
<div class="clearfix">
    <span class="pull-right tableTools-container"></span>
</div>
<div class="table-header">
    {{ $panel }}  Popis zapisa u tabeli. Filtrirajte pomoću filtra.
</div>
<!-- div.table-responsive -->
<div class="table-responsive">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>R.B.</th>
                    <th>Godina</th>
                    <th>Mjesec</th>
                    <th>Ispit</th>
                    <th>Fakultet/Semestar</th>
                    <th>Sem./Sec.</th>
                    <th>Status rezultata</th>
                    <th>Status ispita</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($data['schedule_exams']) && $data['schedule_exams']->count() > 0)
                    @php($i=1)
                    @foreach($data['schedule_exams'] as $exam)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ ViewHelper::getYearById($exam->years_id) }}</td>
                            <td>{{ ViewHelper::getMonthById($exam->months_id) }}</td>
                            <td>{{ ViewHelper::getExamById($exam->exams_id) }}</td>
                            <td>{{ ViewHelper::getFacultyTitle($exam->faculty_id) }}</td>
                            <td>{{ ViewHelper::getSemesterById($exam->semesters_id) }}</td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $exam->publish_status == '1'?"btn-info":"btn-warning" }}" >
                                        {{ $exam->publish_status == '1'?"Publish":"Un-Publish" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route($base_route.'.result-publish', ['year' => $exam->years_id,
                                        'month' => $exam->months_id, 'exam' => $exam->exams_id,'faculty' => $exam->faculty_id,
                                         'semester' => $exam->semesters_id]) }}" title="Publish"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ route($base_route.'.result-un-publish', ['year' => $exam->years_id,
                                        'month' => $exam->months_id, 'exam' => $exam->exams_id,'faculty' => $exam->faculty_id,
                                         'semester' => $exam->semesters_id]) }}" title=UnPublish"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $exam->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $exam->status == 'active'?"Active":"In Active" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route($base_route.'.active', ['year' => $exam->years_id,
                                        'month' => $exam->months_id, 'exam' => $exam->exams_id,'faculty' => $exam->faculty_id,
                                         'semester' => $exam->semesters_id]) }}" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ route($base_route.'.in-active', ['year' => $exam->years_id,
                                        'month' => $exam->months_id, 'exam' => $exam->exams_id,'faculty' => $exam->faculty_id,
                                         'semester' => $exam->semesters_id]) }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td>
                                <div class="action-buttons">
                                   <a href="{{ route($base_route.'.delete', ['year' => $exam->years_id,
                                        'month' => $exam->months_id, 'exam' => $exam->exams_id,'faculty' => $exam->faculty_id,
                                         'semester' => $exam->semesters_id]) }}" class="red bootbox-confirm">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">Nema pronađenih podataka. Filtrirajte za prikaz. </td>
                    </tr>
                @endif
            </tbody>
        </table>
</div>
</div>