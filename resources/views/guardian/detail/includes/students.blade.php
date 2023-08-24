<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Povezana lista studenata</h4>
        <div class="clearfix">
            {!! Form::open(['route' => $base_route.'.link','method' => 'POST', 'class' => 'form-horizontal',
                        "enctype" => "multipart/form-data"]) !!}

                <div class="form-group">
                    {!! Form::hidden('guardian_id', $data['guardian']->id, ["placeholder" => "", "class" => "col-xs-5 col-sm-5"]) !!}
                    {!! Form::label('guardian_info', 'Pronađite studenta koristeći ime | Broj mobilnog telefona | Pošaljite email i kliknite da povežete', ['class' => 'col-sm-12 control-label align-center']) !!}
                    <div class="col-sm-12">
                        {!! Form::select('student_link_id', [], null, ["placeholder" => "Unesite studentov Reg.br. ili kontakt broj ili ime...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]) !!}
                        @include('includes.form_fields_validation_message', ['name' => 'student_link_id'])

                        <hr>
                        <div class="align-right">
                            <button type="submit" class="btn btn-sm btn-primary" id="load-guardian-html-btn">
                                <i class="ace-icon fa fa-link bigger-130"></i> Linkuj studenta
                            </button>
                        </div>
                    </div>
                </div>

            {!! Form::close() !!}

            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
        Lista studenata koja je povezana sa mentorom.
        </div>
    <!-- div.table-responsive -->
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>R.B.</th>
                    <th>Fakultet/Odsjek</th>
                    <th>Sem./Sec.</th>
                    <th>Reg.br</th>
                    <th>Student</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['guardian']) && $data['guardian']->students()->count() > 0)
                    @php($i=1)
                    @foreach($data['guardian']->students()->get() as $student)
                        <tr>
                            <td>{{ $i }}</td>
                            <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                            <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $student->id]) }}"> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $student->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $student->status == 'active'?"Aktivan":"Neaktivan" }}
                                    </button>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route($base_route.'.unlink', ['student' => $student->id,'guardian' => $data['guardian']->id]) }}" class="btn btn-danger btn-minier bootbox-confirm" >
                                    <i class="ace-icon fa fa-unlink bigger-130"></i> Poništi vezu
                                </a>
                            </td>

                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">Podaci nisu pronađeni. Filtrirajte za prikaz. </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}

        </div>
    </div>
</div>