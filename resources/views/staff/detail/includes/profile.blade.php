<div class="row">
    <div class="col-sm-12 align-right hidden-print">
        <a href="{{ route($base_route.'.edit', ['id' => $data['staff']->id]) }}" class="btn-primary btn-sm" >
            <i class="ace-icon fa fa-pencil"></i> Izmjena
        </a>
        &nbsp;|&nbsp;
        <a href="#" class="btn-primary btn-sm" onclick="window.print();">
            <i class="ace-icon fa fa-print"></i> Print
        </a>
    </div>

    <div class="col-xs-12 col-sm-3 center">
        <div>
            <span class="profile-picture">
                @if($data['staff']->staff_image != '')
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['staff']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['staff']->staff_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['staff']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">{{ $data['staff']->first_name.' '.
                    $data['staff']->middle_name.' '.$data['staff']->last_name }}</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Reg. br.: </div>
                <div class="profile-info-value">
                    <span class="editable" id="reg_no">{{ $data['staff']->reg_no }}</span>
                </div>
                <div class="profile-info-name"> Datum pridruživanja:</div>
                <div class="profile-info-value">
                    <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($data['staff']->join_date)->format('Y-m-d')}}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Ime : </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ $data['staff']->first_name.' '.
                    $data['staff']->middle_name.' '.$data['staff']->last_name }}</span>
                </div>
                <div class="profile-info-name"> Datum rođenja: </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ \Carbon\Carbon::parse($data['staff']->date_of_birth)->format('Y-m-d')}}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Pol: </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ $data['staff']->gender }}</span>
                </div>
                <div class="profile-info-name"> Krvna grupa: </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ $data['staff']->blood_group }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Nacionalnost: </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ $data['staff']->nationality }}</span>
                </div>
                <div class="profile-info-name"> Maternji jezik: </div>
                <div class="profile-info-value">
                    <span class="editable" id="staff_name">{{ $data['staff']->mother_tongue }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="email">{{ $data['staff']->email }}</span>
                </div>

                <div class="profile-info-name"> Mobitel: </div>
                <div class="profile-info-value">
                    <span class="editable" id="email">{{ $data['staff']->mobile_1.','.$data['staff']->mobile_2 }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Telefon kuća: </div>
                <div class="profile-info-value">
                    <span class="editable" id="email">{{ $data['staff']->home_phone }}</span>
                </div>

                <div class="profile-info-name"> Kvalifikacjia: </div>
                <div class="profile-info-value">
                    <span class="editable" id="email">{{ $data['staff']->qualification }}</span>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Stalna adresa</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Adresa: </div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_place">{{ $data['staff']->address }}</span>
            </div>
            <div class="profile-info-name"> Kanton:</div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_district">{{ $data['staff']->state }}</span>
            </div>
            <div class="profile-info-name"> Država: </div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_zone">{{ $data['staff']->country }}</span>
            </div>
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Privremena adresa</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Adresa: </div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_place">{{ $data['staff']->temp_address }}</span>
            </div>
            <div class="profile-info-name"> Kanton:</div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_district">{{ $data['staff']->temp_state }}</span>
            </div>
            <div class="profile-info-name"> Država: </div>
            <div class="profile-info-value">
                <span class="editable" id="permanent_zone">{{ $data['staff']->temp_country }}</span>
            </div>
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Roditelji Info</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Ime oca:  </div>
            <div class="profile-info-value">
                <span class="editable" id="temporary_place">{{ $data['staff']->father_name }}</span>
            </div>

            <div class="profile-info-name"> Ime majke:  </div>
            <div class="profile-info-value">
                <span class="editable" id="temporary_place">{{ $data['staff']->mother_name }}</span>
            </div>
        </div>
    </div>
    <div class="space-6"></div>


    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">Detalji kvalifikacije</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            <div class="profile-info-name"> Kvalifikacija:  </div>
            <div class="profile-info-value">
                <span class="editable" id="temporary_place">{{ $data['staff']->qualification }}</span>
            </div>
            <div class="profile-info-name"> Iskustvo:</div>
            <div class="profile-info-value">
                <span class="editable" id="guardian_eligibility">{{ $data['staff']->experience }}</span>
            </div>
        </div>
        <div class="profile-info-row">
            <div class="profile-info-name"> Informacije o iskustvu:  </div>
            <div class="profile-info-value">
                <span class="editable" id="guardian_office">{{ $data['staff']->experience_info }}</span>
            </div>
        </div>
        <div class="profile-info-row">
            <div class="profile-info-name"> Ostale informacije:  </div>
            <div class="profile-info-value">
                <span class="editable" id="mother_mobile_1">{{ $data['staff']->other_info }}</span>
            </div>
        </div>
    </div>

    <div class="space-4"></div>

    <div  class=" align-center">
        <span class="profile-picture">
        {{--@if($data['staff']->reg_no != '')
            {!! QrCode::size(200)->generate($data['staff']->first_name.' '.
            $data['staff']->middle_name.' '.$data['staff']->last_name.'['.$data['staff']->reg_no.']'); !!}
        @else
        @endif--}}
        </span>
    </div>
    {{--$QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
    $qrcode_text = $QRCodeReader->decode(base64_encode("image_stream"));
    echo $qrcode_text;--}}

</div>

