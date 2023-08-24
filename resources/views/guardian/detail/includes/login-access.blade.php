{{--guardian user--}}
<div class="row">

    @if( !$data['guardian_login'])
        {{--create--}}
        <div class="col-xs-12">
            <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Kreirajte pristup za prijavu mentoru</h4>

            {!! Form::open(['route' => 'student.guardian.user.create', 'method' => 'POST', 'class' => 'form-horizontal',
                           'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
            {!! Form::hidden('role_id', 7) !!}
            {!! Form::hidden('hook_id', $data['guardian']->id) !!}

            <div class="form-group">
                {!! Form::label('name', 'Ime i prezime', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('name', $data['guardian']->guardian_first_name.' '.$data['guardian']->guardian_middle_name.' '.$data['guardian']->guardian_last_name, ["class" => "form-control border-form", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'name'])
                </div>

                {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::email('email', $data['guardian']->guardian_email, ["class" => "form-control border-form", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'email'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::password('password',  ["class" => "form-control border-form", "id"=>"pass", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'password'])
                </div>

                {!! Form::label('confirmPassword', 'Potvrdi Password', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::password('confirmPassword',  ["class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/,"id"=>"repatpass", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'confirmPassword'])
                </div>
            </div>
            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-12 align-right">
                    <button class="btn" type="reset">
                        <i class="fa fa-undo bigger-110"></i>
                        Reset
                    </button>

                    <button class="btn btn-info" type="submit">
                        <i class="fa fa-save bigger-110"></i>
                        Kreirajte pravo pristupa
                    </button>
                </div>
            </div>

            <div class="hr hr-24"></div>
            {!! Form::close() !!}
        </div>
    @else
        {{--edit--}}
        <div class="col-xs-12">
            <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Uredi pristup za mentora</h4>
            <a href="{{ route('student.guardian.user.active', ['id' => $data['guardian_login']->id]) }}" title="Active" class="btn-success btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Otključaj korisnika</a>
            <a href="{{ route('student.guardian.user.in-active', ['id' => $data['guardian_login']->id]) }}" title="In-Active" class="btn-warning btn-sm"><i class="fa fa-lock" aria-hidden="true"></i> Zaključaj korisnika</a>
            <a href="{{ route('student.guardian.user.delete', ['id' => $data['guardian_login']->id]) }}" title="Delete" class="btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Izbriši korisnika</a>
            <div class="hr hr-24"></div>

            {!! Form::model($data['guardian_login'], ['route' => ['student.guardian.user.update', $data['guardian_login']->id], 'method' => 'POST', 'class' => 'form-horizontal',
                      'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
            {!! Form::hidden('id', $data['guardian_login']->id) !!}
            {!! Form::hidden('role_id', 7) !!}
            {!! Form::hidden('hook_id', $data['guardian']->id) !!}

            <div class="form-group">
                {!! Form::label('name', 'Ime ii prezime', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('name', null, ["class" => "form-control border-form", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'name'])
                </div>

                {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::email('email', null, ["class" => "form-control border-form", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'email'])
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::password('password',  ["placeholder" => "", "class" => "form-control border-form", "id"=>"pass", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'password'])
                </div>

                {!! Form::label('confirmPassword', 'Potvrdi Password', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/,"id"=>"repatpass", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'confirmPassword'])
                </div>
            </div>
            <div class="col-sm-4">
                <label data-toggle="dropdown" class="label {{ $data['guardian_login']->status == 'active'?"label-success":"label-danger" }}" >
                    {{ $data['guardian_login']->status == 'active'?"Korisnik aktivan":"Korisnik neaktivan" }}
                </label>
            </div>
            <div class="clearfix hr-8"></div>

            <div class="clearfix form-actions">
                <div class="col-md-12 align-right">
                    <button class="btn" type="reset">
                        <i class="fa fa-undo bigger-110"></i>
                        Reset
                    </button>

                    <button class="btn btn-info" type="submit">
                        <i class="fa fa-save bigger-110"></i>
                        Ažuriraj pojedinosti
                    </button>
                </div>
            </div>


            <div class="hr hr-24"></div>
            {!! Form::close() !!}
        </div>
    @endif

</div>
