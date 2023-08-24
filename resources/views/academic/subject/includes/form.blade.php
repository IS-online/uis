
<div class="form-group">
    {!! Form::label('title', 'Predmet', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, ["placeholder" => "BSC-ME-180-R1-Sem I: Sociologija  ", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('code', 'Kod', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('code', null, ["placeholder" => "Šifra predmeta", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'code'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('full_mark_theory', 'FM (T)', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('full_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_theory'])
    </div>
    {!! Form::label('pass_mark_theory', 'PM (T)', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('pass_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'pass_mark_theory'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('full_mark_practical', 'FM (P)', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('full_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'full_mark_practical'])
    </div>
    {!! Form::label('pass_mark_practical', 'PM (P)', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('pass_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'pass_mark_practical'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('credit_hour', 'ECTS kredita', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::number('credit_hour', null, ["class" => "form-control border-form upper",'min'=>'0']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'credit_hour'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('sub_type', 'VRSTA PREDMETA', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('sub_type',['Obavezan'=>'Obavezan','Izborni'=>'Izborni'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'sub_type'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('class_type', 'OBLIK NASTAVE', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('class_type',['Teorija'=>'Teorija','Aktivnosti/Praksa'=>'Aktivnosti/Praksa','Sve'=>'Sve'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'class_type'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('staff_id', 'Nastavnik', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('staff_id',$data['staffs'], null, ["class" => "form-control border-form chosen-select","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'staffs'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Opis', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description', null, ["class" => "form-control border-form upper",'rows'=>'1']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'description'])
    </div>
</div>
