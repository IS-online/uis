<!-- Modal -->
<div class="modal fade" id="activeAgain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'hostel.resident.quick-resident', 'method' => 'GET', 'class' => 'form-horizontal',
                        "enctype" => "multipart/form-data"]) !!}

        <div class="modal-content">
            <div class="modal-header">
                {{--<button type="button" class="close top-close" data-dismiss="modal" id="close-button">×</button>
                <h4 class="modal-title title text-center fees_title" id="MasterTitle"><b>Class 6 General:</b> admission-fees</h4>--}}
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input type="hidden" name="residentId" id="residentId" value=""/>
                        <input type="hidden" name="user_type" id="residentUserType" value="1"/>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hostel</label>
                                    <div class="col-sm-9">
                                        {!! Form::select('hostel_assign', $data['hostels'], null, ['class' => 'form-control', "onChange" => "loadRooms(this)"]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Soba</label>
                                    <div class="col-sm-3">
                                        <select name="room_assign" class="form-control room_select" onChange="loadBeds(this)">
                                            <option value="0"> Odaberi sobu... </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 control-label">Krevet</label>
                                    <div class="col-sm-3">
                                        <select name="bed_assign" class="form-control bed_select">
                                            <option value="0"> Odaberi krevet... </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                       {{-- <div class="form-group ">
                            <div class="col-sm-12">
                                {!! Form::label('room_type', 'RoomType', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-6">
                                    {!! Form::select('room_type', $data['room_type'], null, ['class' => 'form-control', "required"]) !!}
                                </div>

                                {!! Form::label('rate_perbed', 'Rate/Bed', ['class' => 'col-sm-2 control-label']) !!}
                                <div class="col-sm-2">
                                    {!! Form::number('rate_perbed',null, ['class' => 'form-control', "required"]) !!}
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="box-body">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Otkaži</button>
                    <button type="submit" class="btn cfees save_button btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> <i class="fa fa-bed" aria-hidden="true"></i> Pridruži krevet </button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>