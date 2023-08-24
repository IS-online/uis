
<div class="row">
    <div class="col-sm-12 align-right hidden-print">
        <a href="{{ route($base_route.'.edit', ['id' => $data['student']->id]) }}" class="btn-primary btn-sm" >
            <i class="ace-icon fa fa-pencil"></i> Izmjena
        </a>
        &nbsp;|&nbsp;
        <a href="#" class="btn-primary btn-sm" onclick="window.print();">
            <i class="ace-icon fa fa-print"></i> Print
        </a>
    </div>

    <div class="col-xs-12 col-sm-3 col-print-3">
        <div>
            <span class="profile-picture">
               @if($data['student']->student_image != '')
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['student']->student_image) }}" width="250px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>

            @if($data['student']->student_signature != '')
                <span class="profile-picture align-center">
                        <img class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['student']->student_signature) }}" width="150px" />
                </span>
            @else

            @endif

            <div class="space-4"></div>
            {{--<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <i class="ace-icon fa fa-circle light-green"></i>
                        &nbsp;
                        <span class="white">Meho Solutions</span>
                    </a>

                    <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                        <li class="dropdown-header"> Promjeni status </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle green"></i>
                                &nbsp;
                                <span class="green">Dostupno</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle red"></i>
                                &nbsp;
                                <span class="red">Zauzeto</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle grey"></i>
                                &nbsp;
                                <span class="grey">Nedostupno</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>--}}

        </div>
    </div>
<!--POCETAK KOMENTARA                                  OVO NA KRAJ KOMENTARA ! -->
    <div class="col-xs-12 col-sm-9 col-print-9">
        {{--<div class="center">
            <span class="btn btn-app btn-sm btn-light no-hover">
                <span class="line-height-1 bigger-170 blue"> 1,411 </span>
                <br>
                <span class="line-height-1 smaller-90"> Pregledi </span>
            </span>
            <span class="btn btn-app btn-sm btn-yellow no-hover">
                <span class="line-height-1 bigger-170"> 32 </span>
                <br>
                <span class="line-height-1 smaller-90"> Pratioci </span>
            </span>
            <span class="btn btn-app btn-sm btn-pink no-hover">
                <span class="line-height-1 bigger-170"> 4 </span>
                <br>
                <span class="line-height-1 smaller-90"> Projekti </span>
            </span>
            <span class="btn btn-app btn-sm btn-grey no-hover">
                <span class="line-height-1 bigger-170"> 23 </span>
                <br>
                <span class="line-height-1 smaller-90"> Recenzije </span>
            </span>
            <span class="btn btn-app btn-sm btn-success no-hover">
                <span class="line-height-1 bigger-170"> 7 </span>
                <br>
                <span class="line-height-1 smaller-90"> Albumi </span>
            </span>
            <span class="btn btn-app btn-sm btn-primary no-hover">
                <span class="line-height-1 bigger-170"> 55 </span>
                <br>
                <span class="line-height-1 smaller-90"> Kontakti </span>
            </span>
        </div>--}}

        <div class="space-3"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">{{ $data['student']->first_name.' '.
                    $data['student']->middle_name.' '.$data['student']->last_name }}</div>
        <div class="space-6"></div>
    
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                @if($data['student']->broj_dosijea !="")
                    <div class="profile-info-name"> Broj dosijea:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="broj_dosijea">{{ $data['student']->broj_dosijea }}</span>
                    </div>
                @endif
                @if($data['student']->university_reg != "")
                    <div class="profile-info-name"> Univ.Reg.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="university_reg">{{ $data['student']->university_reg }}</span>
                    </div>
                @endif
            </div>
            <div class="profile-info-row">
                @if($data['student']->reg_no != "")
                    <div class="profile-info-name"> Reg. br.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_no">{{ $data['student']->reg_no }}</span>
                    </div>
                @endif
                @if($data['student']->reg_date !="")
                    <div class="profile-info-name"> Reg. datum :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($data['student']->reg_date)->format('d/m/Y')}}</span>
                    </div>
                @endif
            </div>
            <div class="profile-info-row">
                @if($data['student']->last_name !="")
                    <div class="profile-info-name"> Prezime:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="last_name">{{ $data['student']->last_name }}</span>
                    </div>
                @endif
                @if($data['student']->father_first_name !="")
                    <div class="profile-info-name"> Ime roditelja:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="father_first_name">{{ $data['student']->father_first_name }}</span>
                    </div>
                @endif
            </div>
            <div class="profile-info-row">
                @if($data['student']->first_name !="")
                    <div class="profile-info-name"> Ime:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="first_name">{{ $data['student']->first_name }}</span>
                    </div>
                @endif
                @if($data['student']->national_id_number !="")
                    <div class="profile-info-name"> JMBG: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="national_id_number">{{ $data['student']->national_id_number }}</span>
                    </div>
                @endif
            </div>
            
            <div class="profile-info-row">
                @if($data['student']->national_id_type !="")
                    <div class="profile-info-name"> Broj lične karte: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="national_id_type">{{ $data['student']->national_id_type }}</span>
                    </div>
                @endif
                @if($data['student']->gender != "")
                    <div class="profile-info-name"> Pol : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="gender">{{ $data['student']->gender }}</span>
                    </div>
                @endif
            </div>
            
            <div class="profile-info-row">
                @if($data['student']->date_of_birth != "")
                    <div class="profile-info-name"> Datum rođenja : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="date_of_birth">{{ \Carbon\Carbon::parse($data['student']->date_of_birth)->format('d/m/Y')}}</span>
                    </div>
                @endif
                @if($data['student']->mjesto_rodjenja !="")
                    <div class="profile-info-name"> Mjesto rođenja:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="mjesto_rodjenja">{{ $data['student']->mjesto_rodjenja }}</span>
                    </div>
                @endif
            </div>
            
            <div class="profile-info-row">
                @if($data['student']->opstina_rodjenja !="")
                    <div class="profile-info-name"> Opština rođenja:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="opstina_rodjenja">{{ $data['student']->opstina_rodjenja }}</span>
                    </div>
                @endif
                @if($data['student']->drzava_rodjenja !="")
                    <div class="profile-info-name"> Država rođenja:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="drzava_rodjenja">{{ $data['student']->drzava_rodjenja }}</span>
                    </div>
                @endif            
            </div>
            
            <div class="profile-info-row">
                @if($data['student']->nationality)
                    <div class="profile-info-name"> Državljanstvo : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="nationality">{{ $data['student']->nationality }}</span>
                    </div>
                @endif 
                @if($data['student']->nacionalnost !="")
                    <div class="profile-info-name"> Nacionalnost: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="nacionalnost">{{ $data['student']->nacionalnost }}</span>
                    </div>
                @endif
            </div>
            
            <div class="profile-info-row">
            @if($data['student']->mother_tongue !="")
                    <div class="profile-info-name"> Maternji jezik: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="mother_tongue">{{ $data['student']->mother_tongue }}</span>
                    </div>
                @endif
            </div>
            
            <div class="profile-info-row ">
                @if($data['student']->faculty !="")
                    <div class="profile-info-name"> Fakultet/Odsjek: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="faculty">{{  ViewHelper::getFacultyTitle( $data['student']->faculty ) }}</span>
                    </div>
                @endif
                @if($data['student']->semester != "")
                    <div class="profile-info-name"> Semestar. :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="semester">{{  ViewHelper::getSemesterTitle( $data['student']->semester ) }}</span>
                    </div>
                @endif
            </div>
            <div class="profile-info-row">
                @if($data['student']->batch !="")
                    <div class="profile-info-name"> Generacija: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="faculty">{{  ViewHelper::getStudentBatchId( $data['student']->batch ) }}</span>
                    </div>
                @endif
                
            </div>
            
            <div class="profile-info-row">
                @if($data['student']->status_studenta !="")
                    <div class="profile-info-name"> Status studenta: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="status_studenta">{{ $data['student']->status_studenta }}</span>
                    </div>
                @endif
                @if($data['student']->status_studenta !="")
                    <div class="profile-info-name"> Status studenta: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="status_studenta">{{ $data['student']->status_studenta }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                
                @if($data['student']->blood_group != "")
                    <div class="profile-info-name"> Krvna grupa : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="blood_group">{{ $data['student']->blood_group }}</span>
                    </div>
                @endif
                @if($data['student']->religion !="")
                    <div class="profile-info-name"> Religija:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="religion">{{ $data['student']->religion }}</span>
                    </div>
                @endif
                @if($data['student']->caste !="")
                    <div class="profile-info-name"> Kasta : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="caste">{{ $data['student']->caste }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->email !="")
                    <div class="profile-info-name"> E-mail : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="email">{{ $data['student']->email }}</span>
                    </div>
                @endif
                @if($data['student']->mobile_1 !="")
                    <div class="profile-info-name"> Mobitel : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="mobile_1">{{ $data['student']->mobile_1.','.$data['student']->mobile_2 }}</span>
                    </div>
                @endif
            </div>
                    <div class="profile-info-row">
                @if($data['student']->datum_ispisa !="")
                    <div class="profile-info-name"> Datum ispisa sa studija :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="datum_ispisa">{{ \Carbon\Carbon::parse($data['student']->datum_ispisa)->format('d/m/Y')}}</span>
                    </div>
                @endif
                @if($data['student']->datum_zavrsetka_studija !="")
                    <div class="profile-info-name"> Datum završetka studija :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="datum_zavrsetka_studija">{{ \Carbon\Carbon::parse($data['student']->datum_zavrsetka_studija)->format('d/m/Y')}}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Prelazak sa druge VŠU</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->dolazak_sa_druge_vsu !="")
                <div class="profile-info-name"> Sa koje VŠU dolazi student : </div>
                <div class="profile-info-value">
                    <span class="editable" id="dolazak_sa_druge_vsu">{{ $data['student']->dolazak_sa_druge_vsu }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Strani studenti nostrifikacija</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->nostrifikacija !="")
                <div class="profile-info-name"> Nostrifikacija inostrane diplome : </div>
                <div class="profile-info-value">
                    <span class="editable" id="nostrifikacija">{{ $data['student']->nostrifikacija }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Promjena podataka</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->promjena_prezimena_imena !="")
                <div class="profile-info-name"> Promjena prezimena i imena : </div>
                <div class="profile-info-value">
                    <span class="editable" id="promjena_prezimena_imena">{{ $data['student']->promjena_prezimena_imena }}</span>
                </div>
            @endif
        </div>
        <div class="space-6"></div>
        <div class="profile-info-row">
            @if($data['student']->promjene_studija !="")
                <div class="profile-info-name"> Promjena u toku studija (odsjeka i dr) : </div>
                <div class="profile-info-value">
                    <span class="editable" id="promjene_studija">{{ $data['student']->promjene_studija }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Pohvale i nagrade</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->pohvale_nagrade !="")
                <div class="profile-info-name"> Datum i Broj odluke/rješenja : </div>
                <div class="profile-info-value">
                    <span class="editable" id="pohvale_nagrade">{{ $data['student']->pohvale_nagrade }}</span>
                </div>
            @endif
        </div>
        <div class="space-6"></div>
    </div>
<!--    </div>     ovo sam ja isključio ako bude problema vrati!!!  -->
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Izrečene mjere zbog kršenja akademske discipline</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->mjere !="")
                <div class="profile-info-name"> Datum i Broj odluke/rješenja : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mjere">{{ $data['student']->mjere }}</span>
                </div>
            @endif
        </div>
        <div class="space-6"></div>
    </div>
<!--    </div>     ovo sam ja isključio ako bude problema vrati!!!  --> 
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Stalna adresa</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->address !="")
                <div class="profile-info-name"> Adresa : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->address }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->state !="")
                <div class="profile-info-name"> Kanton :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->state }}</span>
                </div>
            @endif
            @if($data['student']->country !="")
                <div class="profile-info-name"> Država : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->country }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Privremena adresa</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->temp_address !="")
                <div class="profile-info-name"> Adresa : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->temp_address }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->temp_state !="")
                <div class="profile-info-name"> Kanton :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->temp_state }}</span>
                </div>
            @endif
            @if($data['student']->temp_country !="")
                <div class="profile-info-name"> Država : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->temp_country }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Roditelji Info</div>
    @if($data['student']->grandfather_first_name !="")
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Djed :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->grandfather_first_name.' '.$data['student']->grandfather_middle_name.' '.$data['student']->grandfather_last_name }}</span>
                </div>
            </div>
        </div>
    @endif
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->father_first_name !="")
                <div class="profile-info-name"> Očevo ime :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->father_first_name.' '.$data['student']->father_middle_name.' '.$data['student']->father_last_name }}</span>
                </div>
            @endif
            @if($data['student']->father_eligibility !="")
                <div class="profile-info-name"> Kvalifikacija :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_eligibility">{{ $data['student']->father_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->father_occupation !="")
                <div class="profile-info-name"> Zanimanje :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_occupation">{{ $data['student']->father_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->father_office !="")
                <div class="profile-info-name"> Kancelarija :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office">{{ $data['student']->father_office }}</span>
                </div>
            @endif
            @if($data['student']->father_office_number !="")
                <div class="profile-info-name"> Kancelarija br.. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office_number">{{ $data['student']->father_office_number }}</span>
                </div>
            @endif
            @if($data['student']->father_residence_number !="")
                <div class="profile-info-name"> Sjedište : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_residence_number">{{ $data['student']->father_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->father_mobile_1 !="")
                <div class="profile-info-name"> Mobitel 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_1">{{ $data['student']->father_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->father_mobile_2 !="")
                <div class="profile-info-name"> Mobitel 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_2">{{ $data['student']->father_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->father_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_email">{{ $data['student']->father_email }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->mother_first_name !="")
                <div class="profile-info-name"> Ime majke :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->mother_first_name.' '.$data['student']->mother_middle_name.' '.$data['student']->mother_last_name }}</span>
                </div>
            @endif
            @if($data['student']->mother_eligibility !="")
                <div class="profile-info-name"> Kvalifikacija :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_eligibility">{{ $data['student']->mother_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->mother_occupation !="")
                <div class="profile-info-name"> Zanimanje :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_occupation">{{ $data['student']->mother_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->mother_office !="")
                <div class="profile-info-name"> Kancelarija :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office">{{ $data['student']->mother_office }}</span>
                </div>
            @endif
            @if($data['student']->mother_office_number !="")
                <div class="profile-info-name"> Kancelarija br.. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office_number">{{ $data['student']->mother_office_number }}</span>
                </div>
            @endif
            @if($data['student']->mother_residence_number !="")
                <div class="profile-info-name"> Sjedište : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_residence_number">{{ $data['student']->mother_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->mother_mobile_1 !="")
                <div class="profile-info-name"> Mobitel 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_1">{{ $data['student']->mother_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->mother_mobile_2 !="")
                <div class="profile-info-name"> Mobitel 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->mother_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->mother_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_email">{{ $data['student']->mother_email }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Mentor Info</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->guardian_first_name !="")
                <div class="profile-info-name"> Mentor :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->guardian_first_name.' '.$data['student']->guardian_middle_name.' '.$data['student']->guardian_last_name }}</span>
                </div>
            @endif
            @if($data['student']->guardian_eligibility !="")
                <div class="profile-info-name"> Kvalifikacija :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_eligibility">{{ $data['student']->guardian_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->guardian_occupation !="")
                <div class="profile-info-name"> Zanimanje :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_occupation">{{ $data['student']->guardian_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_office !="")
                <div class="profile-info-name"> Kancelarija :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office">{{ $data['student']->guardian_office }}</span>
                </div>
            @endif
            @if($data['student']->guardian_office_number !="")
                <div class="profile-info-name"> Kancelarija br.. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office_number">{{ $data['student']->guardian_office_number }}</span>
                </div>
            @endif
            @if($data['student']->guardian_residence_number !="")
                <div class="profile-info-name"> Sjedište : </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_residence_number">{{ $data['student']->guardian_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_mobile_1 !="")
                <div class="profile-info-name"> Mobitel 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_mobile_1">{{ $data['student']->guardian_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->guardian_mobile_2 !="")
                <div class="profile-info-name"> Mobitel 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_mobile_2">{{ $data['student']->guardian_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->guardian_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_email">{{ $data['student']->guardian_email }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_relation !="")
                <div class="profile-info-name"> Relacija :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_relation">{{ $data['student']->guardian_relation }}</span>
                </div>
            @endif
            @if($data['student']->guardian_address !="")
                <div class="profile-info-name"> Adresa :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->guardian_address }}</span>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    @if (isset($data['academicInfos']) && $data['academicInfos']->count() > 0)
        <div class="space-12"></div>
        <h3 class="text-uppercase text-center no-margin-top" style="font-family: 'Righteous', cursive; font-size: 16px">AKADEMSKA KVALIFIKACIJA</h3>
        <div class="space-6"></div>
        <table class="table-bordered" WIDTH="100%">
            <tr class="text-center">
                <th width="5%">R.B.</th>
                <th>MJESTO</th>
                <th>NAZIV INSTITUCIJE</th>
                <th>GODINA ZAVRŠETKA</th>
                <th>OCJENA</th>
            </tr>
            @php($i=1)
            @foreach($data['academicInfos'] as $academicInfo)
                <tr class="text-center">
                    <td>{{$i}}</td>
                    <td>
                        {{ $academicInfo->board }}
                    </td>
                    <td>
                        {{ $academicInfo->institution }}
                    </td>
                    <td>
                        {{ $academicInfo->pass_year }}
                    </td>
                    <td>
                        {{ $academicInfo->percentage }}
                    </td>
                </tr>
                @php($i++)
            @endforeach

        </table>
    @endif
</div>
<div class="row hidden-print">
    <div class="space-8"></div>
    <div class="col-xs-12 col-sm-3 center">
        <div  class=" align-center">
            <span class="profile-picture">
           @if($data['student']->reg_no != '')
                    {!! QrCode::size(200)->generate($data['student']->first_name.' '.
                    $data['student']->middle_name.' '.$data['student']->last_name.'['.$data['student']->reg_no.']'); !!}
                @else
            @endif
            </span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Mentor</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
                    @if($data['student']->guardian_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->guardian_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>


    <div class="col-xs-12 col-sm-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Otac</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
               @if($data['student']->father_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->father_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>


    <div class="col-xs-12 col-sm-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Majka</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
                @if($data['student']->mother_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->mother_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>
</div>

