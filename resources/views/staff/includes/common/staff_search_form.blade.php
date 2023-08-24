<div class="form-group">
    {!! Form::label('reg_no', 'REG. br.', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('join_date', 'Datum pristupa', ['class' => 'col-sm-1 control-label']) !!}
    <div class=" col-sm-3">
        <div class="input-group ">
            {!! Form::text('join_date_start', null, ["placeholder" => "Datum zaposlenja na IUG.", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
            <span class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                </span>
            {!! Form::text('join_date_end', null, ["placeholder" => "", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'join_date_start'])
            @include('includes.form_fields_validation_message', ['name' => 'join_date_end'])
        </div>
    </div>

    <label class="col-sm-1 control-label">Vrste</label>
    <div class="col-sm-2">
        {!! Form::select('designation', $data['designation'], null, ['class' => 'form-control chosen-select']) !!}

    </div>

    <label class="col-sm-1 control-label">Status</label>
    <div class="col-sm-1">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> Odaberi status </option>
            <option value="active" >Aktivan</option>
            <option value="in-active" >Neaktivan</option>
        </select>
    </div>
</div>