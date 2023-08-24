<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Filtriraj ispite</h4>
<div class="form-horizontal ">
    <div class="clearfix">
        <div class="form-group">
            {!! Form::label('years_id', 'Godina', ['class' => 'col-sm-1 control-label']) !!}
            <div class="col-sm-2">
                {!! Form::select('years_id', $data['years'], null, ["class" => "form-control border-form","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'years_id'])
            </div>

            {!! Form::label('months_id', 'Mjesec', ['class' => 'col-sm-1 control-label']) !!}
            <div class="col-sm-2">
                {!! Form::select('months_id', $data['months'], null, ["class" => "form-control border-form","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'months_id'])
            </div>

            {!! Form::label('exams_id', 'Ispit', ['class' => 'col-sm-1 control-label']) !!}
            <div class="col-sm-5">
                {!! Form::select('exams_id', $data['exams'], null, ["class" => "form-control border-form chosen-select","required"]) !!}
                @include('includes.form_fields_validation_message', ['name' => 'exams_id'])
            </div>

        </div>
        <div class="form-group">

            <label class="col-sm-2 control-label">Fakultet/Odsjek</label>
            <div class="col-sm-5">
                {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this)']) !!}

            </div>

            <label class="col-sm-2 control-label">Sem./Sec.</label>
            <div class="col-sm-3">
                <select name="semester_select" class="form-control semester_select" onChange="loadStudent(this)">
                    <option value="0"> Odaberite Sem./Sec.... </option>
                </select>
            </div>

           {{-- <label class="col-sm-1 control-label">Predmet</label>
            <div class="col-sm-3">
                <select name="schedule_subject" class="form-control schedule_subject" onChange="loadStudent(this)">
                    <option value="0"> Odaberite predmet... </option>
                </select>
            </div>--}}

        </div>
    </div>
    {{--<div class="clearfix form-actions">
        <div class="align-right">
            <button class="btn btn-info" type="submit" id="filter-btn">
                <i class="fa fa-filter bigger-110"></i>
                Filter Ledger
            </button>
        </div>
    </div>--}}
    <div class="hr hr-24"></div>
</div>
