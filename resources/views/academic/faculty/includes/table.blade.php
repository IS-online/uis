 <div class="col-xs-12">
        @include('includes.data_table_header')
        <!-- div.table-responsive -->
        <div class="table-responsive">
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
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
                    <th>KOD - {{ $panel }}</th>
                    <th>Semestar.</th>
                    <th>Status</th>
                    <th>Akcija</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['faculty']) && $data['faculty']->count() > 0)
                    @php($i=1)
                    @foreach($data['faculty'] as $faculty)
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ $faculty->id }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>{{ $i }}</td>
                            <td>
                                {{ $faculty->faculty }}
                                <hr class="hr-2">
                                KOD - {{$faculty->faculty_code}}, INDEX - {{$faculty->id}}
                                <hr class="hr-2">
                            </td>
                            <td >
                                @if(isset($faculty->semester))
                                    @foreach($faculty->semester as $semester)
                                        <div class="label label-info arrowed-right arrowed-in">
                                            {{ $semester->semester }} - [{{$semester->id}}]
                                        </div>
                                        <hr class="hr-2">
                                    @endforeach
                                @endif
                            </td>
                            {{--<td>{{ $faculty->status }}</td>--}}
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-minier dropdown-toggle {{ $faculty->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $faculty->status == 'active'?"Aktivan":"Neaktivan" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('faculty.active', ['id' => $faculty->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="{{ route('faculty.in-active', ['id' => $faculty->id]) }}"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a class="green" href="{{ route($base_route.'.edit', ['id' => $faculty->id]) }}">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.delete', ['id' => $faculty->id]) }}" class="red bootbox-confirm">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">Nisu pronađeni {{ $panel }} podaci. Filtrirajte {{ $panel }} za prikaz. </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
