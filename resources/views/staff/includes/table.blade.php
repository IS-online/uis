<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Pregled uposlenika</h4>
        <div class="clearfix">
        <span class="easy-link-menu">
            <a class="btn-success btn-sm bulk-action-btn" attr-action-type="export-excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;Export</a>
            <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Aktivan</a>
            <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="in-active"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Neaktivan</a>
            <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Izbriši</a>
            <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="create-reset-login"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Kreiraj/Resetuj prijavu</a>
            <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="create-reset-library-member"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Učlanite u biblioteku</a>
        </span>
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Tabelarni pregled uposlenika. Filtrirajte za lakše pronalaženje.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}

            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td class="text-center" colspan="11">{!! $data['staff']->appends($data['filter_query'])->links() !!}</td>
                    </tr>
                    <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>R.B.</th>
                        {{--<th>Image</th>--}}
                        <th>Reg.br</th>
                        <th>Uposlenik</th>
                        <th>Telefon</th>
                        <th>Vrsta</th>
                        <th>Kvalifikacija</th>
                        <th>Status</th>
                        <th>Akcije</th>
                        <th>Aktiviranje servisa</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($data['staff']) && $data['staff']->count() > 0)
                        @php($i=1)
                        @foreach($data['staff'] as $staff)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $staff->id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>{{ $i }}</td>
                                {{--<td>
                                    <img src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$staff->staff_image) }}"
                                         alt="{{ $staff->staff_image }}" class="img-responsive" width="80px">
                                </td>--}}
                                <td><a href="{{ route($base_route.'.view', ['id' => $staff->id]) }}">{{ $staff->reg_no }}</a></td>
                                <td><a href="{{ route($base_route.'.view', ['id' => $staff->id]) }}"> {{ $staff->first_name.' '.$staff->middle_name.' '. $staff->last_name }}</a></td>
                                <td><a href="tel:{{ $staff->mobile_1 }}">{{ $staff->mobile_1 }}</a> </td>
                                <td>{{ ViewHelper::getDesignationId($staff->designation) }}</td>
                                <td>{{ $staff->qualification }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $staff->status == 'active'?"btn-info":"btn-warning" }}" >
                                            {{ $staff->status == 'active'?"Aktivan":"Neaktivan" }}
                                            <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route($base_route.'.active', ['id' => $staff->id]) }}" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            </li>

                                            <li>
                                                <a href="{{ route($base_route.'.in-active', ['id' => $staff->id]) }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route($base_route.'.view', ['id' => $staff->id]) }}" class="btn btn-primary btn-minier">
                                            <i class="ace-icon fa fa-eye bigger-130"></i>
                                        </a>

                                        <a href="{{ route($base_route.'.edit', ['id' => $staff->id]) }}" class="btn btn-success btn-minier">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a href="{{ route($base_route.'.delete', ['id' => $staff->id]) }}" class="btn btn-danger btn-minier bootbox-confirm" >
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('library.member.quick-membership', ['reg_no' => $staff->reg_no,'user_type' => 2,'status' => 'active',]) }}" class="btn btn-primary btn-minier">
                                            <i class="ace-icon fa fa-book bigger-130"></i>
                                        </a>

                                        <a class="open-ActiveAgain label label-primary" data-toggle="modal"
                                           data-target="#activeAgain"
                                           data-id="{{ $staff->id }}"
                                           data-reg="{{ $staff->reg_no }}">
                                         <span>
                                             <i class="ace-icon fa fa-bed bigger-130"></i>
                                         </span>
                                        </a>

                                        <a class="open-TransportActiveAgain label label-primary" data-toggle="modal"
                                           data-target="#TransportActiveAgain"
                                           data-id="{{ $staff->id }}"
                                           data-reg="{{ $staff->reg_no }}">
                                         <span>
                                             <i class="ace-icon fa fa-bus bigger-130"></i>
                                         </span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">Podaci nisu pronađeni. Filtrirajte da pronađete što želite. </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>