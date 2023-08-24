<span class="label label-info arrowed-in arrowed-right arrowed responsive">Polja označena crveno su obavezna. </span>
<hr class="hr-16">
<div class="form-group">
    {!! Form::label('broj_dosijea', 'Broj dosijea', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('broj_dosijea', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'broj_dosijea'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('reg_no', 'REG.br.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('reg_date', 'Datum prijema', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('reg_date', null, ["class" => "form-control date-picker border-form input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_date'])
    </div>

    {!! Form::label('university_reg', 'UNIVERZITET REG. BR.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('university_reg', null, ["placeholder" => "", "class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'university_reg'])
    </div>
</div>

<div class="form-group">
    @if (!isset($data['row']))
        <label class="col-sm-2 control-label">Fakultet/Odsjek</label>
        <div class="col-sm-5">
            <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Odaberite Fakultet/Odsjek."  onChange ="loadSemesters(this)" >
                <option value="">  </option>
                @foreach( $data['faculties'] as $key => $faculty)
                    <option value="{{ $key }}">{{ $faculty }}</option>
                @endforeach
            </select>
        </div>

        <label class="col-sm-2 control-label">Semestar.</label>
        <div class="col-sm-3">
            <select name="semester" class="form-control semester" required > </select>
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>
    @else
        <label class="col-sm-2 control-label">Fakultet/Odsjek</label>
        <div class="col-sm-5">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'faculty'])
        </div>

        <label class="col-sm-2 control-label">Semestar.</label>
        <div class="col-sm-3">
            {!! Form::select('semester', $data['semester'], null, ['class' => 'form-control',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>
    @endif
</div>


<div class="form-group">
    @if (!isset($data['row']))
        <label class="col-sm-2 control-label">Period</label>
        <div class="col-sm-5">
            {!! Form::select('batch', $data['batch'], 1, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'batch'])
        </div>

        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-3">
            {!! Form::select('academic_status', $data['academic_status'], 1, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'academic_status'])
        </div>
    @else
        <label class="col-sm-2 control-label">Period</label>
        <div class="col-sm-5">
            {!! Form::select('batch', $data['batch'], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'batch'])
        </div>

        <label class="col-sm-2 control-label">Status studiranja</label>
        <div class="col-sm-3">
            {!! Form::select('academic_status', $data['academic_status'], null, ['class' => 'form-control']) !!}
            @include('includes.form_fields_validation_message', ['name' => 'academic_status'])
        </div>
    @endif
</div>

<div class="form-group">
    {!! Form::label('status_studenta', 'Status studenta', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('status_studenta', ['' => '','REDOVNI' => 'REDOVNI', 'VANREDNI' => 'VANREDNI', 'DL' => 'DL', 'STRANI STUDENT' => 'STRANI STUDENT', 'STUDENT GOST' => 'STUDENT GOST'], null, ['class'=>'form-control border-form',"required"]); !!}
        @include('includes.form_fields_validation_message', ['name' => 'status_studenta'])
    </div>
    <!--POCETAK KOMENTARA    OVO NA KRAJ KOMENTARA ! -->
    {!! Form::label('datum_ispisa', 'Datum ispisa sa studija', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('datum_ispisa', null, ["class" => "form-control date-picker border-form input-mask-date"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'datum_ispisa'])
    </div>
    {!! Form::label('datum_zavrsetka_studija', 'Datum završetka studija', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('datum_zavrsetka_studija', null, ["class" => "form-control date-picker border-form input-mask-date"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'datum_zavrsetka_studija'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('promjene_studija', 'Promjena u toku studija (Odsjek i dr)', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('promjene_studija', null, ["placeholder" => "Ukoliko je došlo do promjena tokom studija unijeti promjene.", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'promjene_studija'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('first_name', 'IME I PREZIME STUDENTA', ['class' => 'col-sm-3 control-label',]) !!}
    <div class="col-sm-3">
        {!! Form::text('first_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('last_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'last_name'])
    </div>
</div>
 <!-- Student podaci o rođenju-->
<div class="form-group">
  <div > 
    {!! Form::label('date_of_birth', 'Datum rođenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('date_of_birth', null, ["class" => "form-control border-form date-picker input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
    </div>
    
    {!! Form::label('mjesto_rodjenja', 'Mjesto rođenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('mjesto_rodjenja', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mjesto_rodjenja'])
    </div>
    
        {!! Form::label('opstina_rodjenja', 'Opština rođenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('opstina_rodjenja', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'opstina_rodjenja'])
    </div>
  </div>  
</div>

<div class="form-group">
    
        {!! Form::label('drzava_rodjenja', 'Država rođenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('drzava_rodjenja', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'drzava_rodjenja'])
    </div>
    
    {!! Form::label('nationality', 'Državljanstvo ', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'nationality'])
    </div>
        {!! Form::label('mother_tongue', 'Maternji jezik', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
    </div>
</div>

<div class="form-group">

    {!! Form::label('national_id_type', 'Nacionalnost', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('nacionalnost', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'nacionalnost'])
    </div>
    
    {!! Form::label('national_id_type', 'Lična karata br.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('national_id_type', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'national_id_type'])
    </div>

    {!! Form::label('national_id_number', 'JMBG', ['class' => 'col-sm-2 control-label']) !!}
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

    {!! Form::label('extra_id_card_number', 'Extra Id br', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::text('extra_id_card_number', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_id_card_number'])
    </div>

</div>


<div class="form-group">
    
        {!! Form::label('gender', 'Pol', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('gender', ['' => '','MUŠKI' => 'MUŠKI', 'ŽENSKI' => 'ŽENSKI', 'OSTALO' => 'OSTALO'], null, ['class'=>'form-control border-form',"required"]); !!}
        @include('includes.form_fields_validation_message', ['name' => 'gender'])
    </div>

    {!! Form::label('blood_group', 'Krvna gr.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
        [ 'class'=>'form-control border-form']); !!}
        @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
    </div>
    
</div>

<div class="form-group">
    {!! Form::label('religion', 'Religija', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('religion', null, ["placeholder" => "", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'religion'])
    </div>

    {!! Form::label('caste', 'Kasta', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('caste', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'caste'])
    </div>
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('email', null, ["class" => "form-control border-form ", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>
    {!! Form::label('extra_info', 'Extra Info', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::textarea('extra_info', null, ["class" => "form-control border-form", "rows"=>"1"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'extra_info'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Pohvale i nagrade</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('pohvale_nagrade', 'Datum i Broj odluke/rješenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('pohvale_nagrade', null,  ["class" => "form-control border-form upper", 'placeholder' => 'Unijeti datum i broj odluke. Original dokumenta skenirati i priložiti u listu dokumenata studenta.' ] )  !!}
        @include('includes.form_fields_validation_message', ['name' => 'pohvale_nagrade'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Izrečene mjere zbog kršenja akademske discipline</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('mjere', 'Datum i Broj odluke/rješenja', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('mjere', null,  ["class" => "form-control border-form upper", 'placeholder' => 'Unijeti datum i broj odluke. Original dokumenta skenirati i priložiti u listu dokumenata studenta.' ] )  !!}
        @include('includes.form_fields_validation_message', ['name' => 'mjere'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Prelazak sa druge VŠU</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('dolazak_sa_druge_vsu', 'Sa koje VŠU dolazi student', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('dolazak_sa_druge_vsu', null,  ["class" => "form-control border-form upper", 'placeholder' => 'Da li je prešao sa druge VŠU? Ako jeste sa koje?' ] )  !!}
        @include('includes.form_fields_validation_message', ['name' => 'dolazak_sa_druge_vsu'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Strani studenti nostrifikacija</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('nostrifikacija', 'Nostrifikacija inostrane diplome', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('nostrifikacija', null,  ["class" => "form-control border-form upper", 'placeholder' => 'Broj i datum rješenja, naziv organa koji je izvršio nostrifikaciju.' ] )  !!}
        @include('includes.form_fields_validation_message', ['name' => 'nostrifikacija'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Promjene podataka</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('promjena_prezimena_imena', 'Promjena prezimena i imena', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('promjena_prezimena_imena', null,  ["class" => "form-control border-form upper", 'placeholder' => 'Naziv organa koji je donio rješenje, broj i datum rješenja' ] )  !!}
        @include('includes.form_fields_validation_message', ['name' => 'promjena_prezimena_imena'])
    </div>
</div>

<div class="label label-warning arrowed-in arrowed-right arrowed">Kontakt</div>
<hr class="hr-8">
<div class="form-group">
    {!! Form::label('home_phone', 'Telefon', ['class' => 'col-sm-1 control-label']) !!}
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
            <span class="lbl"> Privremena adresa je ista kao i stalna adresa</span>
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


