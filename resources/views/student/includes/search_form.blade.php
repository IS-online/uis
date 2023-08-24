<div class="form-group">
    {!! Form::label('reg_no', 'REG. br.', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
    </div>

    {!! Form::label('reg_date', 'Reg. datum', ['class' => 'col-sm-1 control-label']) !!}
    <div class=" col-sm-3">
        <div class="input-group ">
            {!! Form::text('reg_start_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
            <span class="input-group-addon">
                <i class="fa fa-exchange"></i>
            </span>
            {!! Form::text('reg_end_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
        </div>
    </div>

    <label class="col-sm-1 control-label">Status</label>
    <div class="col-sm-2">
        {!! Form::select('academic_status', $data['academic_status'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}
    </div>
    <div class="col-sm-2">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> Odaberi Status </option>
            <option value="active" >Activan</option>
            <option value="in-active" >Neaktivan</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Fakultet/Odsjek</label>
    <div class="col-sm-4">
        {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']) !!}
    </div>

    <label class="col-sm-1 control-label">Semestar.</label>
    <div class="col-sm-2">
        <select name="semester_select" class="form-control semester_select" >
            <option value="0"> Odaberi semestar. </option>
        </select>
    </div>

    <label class="col-sm-1 control-label">Period</label>
    <div class="col-sm-2">
        {!! Form::select('batch', $data['batch'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nationality', 'Nacionalnost', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'nationality'])
    </div>

    {!! Form::label('national_id_type', 'Nacionalni id', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('national_id_type', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'national_id_type'])
    </div>

    {!! Form::label('national_id_number', 'Matični broj', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('national_id_number', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'national_id_number'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('extra_id_card_type', 'Extra Id ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('extra_id_card_type', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_id_card_type'])
    </div>

    {!! Form::label('extra_id_card_number', 'Extra Id broj', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('extra_id_card_number', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_id_card_number'])
    </div>
    {!! Form::label('mother_tongue', 'Maternji jezik', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('mother_tongue', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('religion', 'Religija', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('religion', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'religion'])
    </div>

    {!! Form::label('caste', 'Kasta', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('caste', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'caste'])
    </div>
    {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('email', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>
</div>