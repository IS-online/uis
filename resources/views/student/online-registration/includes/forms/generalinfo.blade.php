<div class="form-group">
    {!! Form::label('reg_date', 'Datum', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_date', null, ["class" => "form-control border-form input-mask-date","readonly"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_date'])
    </div>
    <label class="col-sm-2 control-label">Aplicirajte na Fakultet/odsjek</label>
    <div class="col-sm-7">
        <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Faculty/Class..."  onChange ="loadSemesters(this)" >
            @foreach( $data['faculties'] as $key => $faculty)
                <option value="{{ $key }}">{{ $faculty }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="form-group">
    {!! Form::label('first_name', 'IME STUDENTA', ['class' => 'col-sm-3 control-label',]) !!}
    <div class="col-sm-3">
        {!! Form::text('first_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('last_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'last_name'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('date_of_birth', 'DATUM ROĐENJA', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('date_of_birth', null, ["class" => "form-control border-form date-picker input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
    </div>

    {!! Form::label('gender', 'POL', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('gender', ['' => '','MALE' => 'MUŠKO', 'FEMALE' => 'ŽENSKO', 'OTHER' => 'OSTALO'], null, ['class'=>'form-control border-form',"required"]); !!}
        @include('includes.form_fields_validation_message', ['name' => 'gender'])
    </div>

    {!! Form::label('blood_group', 'KRVNA GRUPA', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
        [ 'class'=>'form-control border-form']); !!}
        @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('nationality', 'NACIONALNOST', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'nationality'])
    </div>

    {!! Form::label('national_id_type', 'NACIONALNI ID', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('national_id_type', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'national_id_type'])
    </div>

    {!! Form::label('national_id_number', 'NACIONALNI ID BROJ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('national_id_number', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'national_id_number'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('extra_id_card_type', 'Extra Id ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('extra_id_card_type', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_id_card_type'])
    </div>

    {!! Form::label('extra_id_card_number', 'Extra Id BROJ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('extra_id_card_number', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_id_card_number'])
    </div>
    {!! Form::label('mother_tongue', 'MATERNJI JEZIK', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('religion', 'RELIGIJA', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('religion', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'religion'])
    </div>

    {!! Form::label('caste', 'KASTA', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('caste', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'caste'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('email', null, ["class" => "form-control border-form "]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>
    {!! Form::label('extra_info', 'Extra Info', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::textarea('extra_info', null, ["class" => "form-control border-form", "rows"=>"1"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_info'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Kontakt</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('home_phone', 'Telfon', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'home_phone'])
    </div>

    {!! Form::label('mobile_1', 'Mobilni 1', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
    </div>

    {!! Form::label('mobile_2', 'Mobilni 2', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_2'])
    </div>
</div>


<div class="label label-warning arrowed-in arrowed-right arrowed">Stalna adresa</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('address', 'Adresa', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('address', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'address'])
    </div>

    {!! Form::label('state', 'Kanton', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('state', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'state'])
    </div>

    {!! Form::label('country', 'Država', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('country', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'country'])
    </div>
</div>


<div class="label label-warning arrowed-in arrowed-right arrowed">Privremena adresa</div>

<div class="control-group col-sm-12">
    <div class="radio">
        <label>
            {!! Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]) !!}
            <span class="lbl"> Privremena adresa je ista kao i stalna.</span>
        </label>
    </div>
</div>

<hr>
<hr class="hr-8">

<div class="form-group">
    {!! Form::label('temp_address', 'Adresa', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('temp_address', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'temp_address'])
    </div>

    {!! Form::label('temp_state', 'Kanton', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('temp_state', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'temp_state'])
    </div>

    {!! Form::label('temp_country', 'Država', ['class' => 'col-sm-1 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('temp_country', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'temp_country'])
    </div>
</div>


