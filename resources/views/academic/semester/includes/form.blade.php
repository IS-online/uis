<div class="form-group">
    {!! Form::label('semester', 'Semestar.', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('semester', null, ["placeholder" => "Primjer - BSC-ME-180 ECTS R1- SEMESTAR I", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'semester'])
    </div>
</div>


<div class="form-group">
    {!! Form::label('gradingType_id', 'Vrste ocjenjivanja', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('gradingType_id',$data['gradingScales'], null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'gradingType_id'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('staff_id', 'Odgovorno lice', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('staff_id',$data['staffs'], null, ["class" => "form-control border-form chosen-select","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'staffs'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('semester', 'Pronađite predmet i dodajte', ['class' => 'col-sm-12 control-label align-center']) !!}
    <div class="col-sm-12">
        {!! Form::select('subject_id', [], null, ["placeholder" => "Unesite naziv predmeta...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'subject_id'])
        <hr>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-plus bigger-120"></i> Dodaj predmet
            </button>
        </div>
    </div>
</div>
<div class="space-4"></div>
<!-- Option Values -->
@include($view_path.'.includes.subject')