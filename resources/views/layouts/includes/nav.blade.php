<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="{{ route('home') }}" class="navbar-brand">
                <small class="text-capitalize">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    @if(isset($generalSetting->institute))
                        {{$generalSetting->institute}}
                        <strong class="text-capitalize orange2"> IUG </strong>
                    @else
                        Univerzitetski informacioni sistem
                    @endif
                </small>
            </a>

            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Uključi korisnički meni</span>

                @if(isset($profileImageSrc) && $profileImageSrc !== null)
                    <img alt="" src="{{ asset($profileImageSrc) }}" width="300px" />
                @else
                    <img src="{{ asset('assets/images/avatars/user.jpg') }}" alt="" />
                @endif


            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Prebaci bočnu traku</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
        </div>

        @if(Auth::check())
            <div class="navbar-buttons navbar-header pull-right collapse navbar-collapse" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue dropdown-modal user-min">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            @if(isset($profileImageSrc) && $profileImageSrc !== null)
                                <img id="avatar" class="nav-user-photo" alt="" src="{{ asset($profileImageSrc) }}" width="300px" />
                            @else
                                <img class="nav-user-photo" src="{{ asset('assets/images/avatars/user.jpg') }}" alt="" />
                            @endif

                            <span class="user-info">
                            <small>Dobrodošli,</small>
                            {{isset(auth()->user()->name)?auth()->user()->name:""}}
                        </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            @if(isset($profileImageSrc) && $profileImageSrc !== '')
                                <li>
                                    <img id="avatar" class="img-responsive" alt="" src="{{ asset($profileImageSrc) }}" width="300px" />
                                </li>
                            @endif
                            <li>
                                @if(isset(auth()->user()->id))
                                    <a href="{{ route('user.view', ['id' => encrypt(auth()->user()->id)]) }}">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profil
                                    </a>
                                @else
                                    <a href="#">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profil
                                    </a>
                                @endif
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @else
            <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="light-blue">
                        <a href="{{ route('login') }}" target="_blank">
                            <i class="ace-icon fa fa-sign-in bigger-120"></i>&nbsp;Login
                        </a>
                    </li>
                    <li class="light-blue">
                        <a href="{{ route('web.home') }}" target="_blank">
                            <i class="ace-icon fa fa-globe bigger-120"></i>&nbsp;WebPortal
                        </a>
                    </li>
                </ul>
            </nav>
        @endif



        @ability('super-admin','expand-action-menu')
            <div class="navbar-buttons navbar-header pull-left  collapse navbar-collapse" role="navigation">
                <div class="collapse navbar-collapse js-navbar-collapse col-md-12">
                    <ul class="nav navbar-nav navbar-nav-mega col-md-12">
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list ace-icon bigger-180"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header"><i class="fa fa-users" aria-hidden="true"></i> Student</li>
                                        <li><a href="{{ route('student') }}">Detalji</a></li>
                                        <li><a href="{{ route('student.registration') }}">Registracija</a></li>
                                        <li><a href="{{ route('student.import') }}">Masovni uvoz</a></li>
                                        <li><a href="{{ route('student.transfer') }}">Transfer</a></li>
                                        <li><a href="{{ route('student.document') }}">Dokumenti</a></li>
                                        <li><a href="{{ route('student.note') }}">Bilješke</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Mentor</li>
                                        <li><a href="{{ route('guardian') }}">Detail</a></li>
                                        <li><a href="{{ route('guardian.registration') }}">Registracija</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Uposlenik</li>
                                        <li><a href="{{ route('staff') }}">Detalji</a></li>
                                        <li><a href="{{ route('staff.add') }}">Registracija</a></li>
                                        <li><a href="{{ route('staff.import') }}">Masovni uvoz</a></li>
                                        <li><a href="{{ route('staff.document') }}">Dokumenti</a></li>
                                        <li><a href="{{ route('staff.note') }}">Bilješke</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Prisustvo</li>
                                        <li><a href="{{ route('attendance.student') }}">Vannastavno prisustvo</a></li>
                                        <li><a href="{{ route('attendance.subject') }}">Nastavno prisustvo</a></li>
                                        <li><a href="{{ route('attendance.staff') }}">Prisustvo uposlenika</a></li>

                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header"><i class="fa fa-calculator" aria-hidden="true"></i> Račun</li>
                                        <li><a href="{{ route('account.fees.quick-receive') }}">Uplata</a></li>
                                        <li><a href="{{ route('account.fees.collection') }}">Prikupljajte naknade</a></li>
                                        <li><a href="{{ route('account.fees.balance') }}">Saldo naknada</a></li>
                                        <li><a href="{{ route('account.fees.master.add') }}">Dodaj naknadu</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('account.payroll.master.add') }}">Dodaj platu</a></li>
                                        <li><a href="{{ route('account.salary.payment') }}">Isplati platu</a></li>
                                        <li><a href="{{ route('account.payroll.balance') }}">Bilans Plate</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('account.transaction') }}">Transakcija</a></li>
                                        <li><a href="{{ route('account.transaction-head') }}">Knjiga</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('account.bank') }}">Bankovni račun</a></li>
                                        <li><a href="{{ route('account.bank-transaction') }}">Bankarska transakcija</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-book" aria-hidden="true"></i> Biblioteka</li>
                                        <li><a href="{{ route('library.book') }}">Knjiga detalji</a></li>
                                        <li><a href="{{ route('library.student') }}">Student član</a></li>
                                        <li><a href="{{ route('library.staff') }}">Uposlenik član</a></li>
                                        <li><a href="{{ route('library.issue-history') }}">Istorija idavanja</a></li>
                                        <li><a href="{{ route('library.return-over') }}">Period povratka je završen</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header"><i class="fa fa-line-chart" aria-hidden="true"></i> Ispitivanje</li>
                                        <li><a href="{{ route('exam.schedule') }}">Raspored ispita </a></li>
                                        <li><a href="{{ route('exam.mark-ledger') }}">Knjiga ocjena</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('exam.admit-card') }}">Prijava ispita</a></li>
                                        <li><a href="{{ route('exam.routine') }}">Rutina</a></li>
                                        <li><a href="{{ route('exam.mark-sheet') }}">Ocjene pregled rezultata</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-certificate" aria-hidden="true"></i> Certifikati</li>
                                        <li><a href="{{ route('certificate.issue') }}">Izdati</a></li>
                                        <li><a href="{{ route('certificate.issue-history') }}">Istorija izdavanja</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('certificate.attendance') }}">Prisustvo</a></li>
                                        <li><a href="{{ route('certificate.transfer') }}">Transfer</a></li>
                                        <li><a href="{{ route('certificate.character') }}">Karakter</a></li>
                                        <li><a href="{{ route('certificate.bonafide') }}">Bonafide</a></li>
                                        <li><a href="{{ route('certificate.course-completion') }}">Položen predmet</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('certificate.generate') }}">Generiši</a></li>
                                        <li><a href="{{ route('certificate.template') }}">Predlošci</a></li>
                                        <li class="divider"></li>

                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header"><i class="fa fa-car" aria-hidden="true"></i> Transport</li>
                                        <li><a href="{{ route('transport.user.history') }}">Istorija korisnika</a></li>
                                        <li><a href="{{ route('transport.user') }}">Putnik/Korisnik</a></li>
                                        <li><a href="{{ route('transport.route') }}">Ruta</a></li>
                                        <li><a href="{{ route('transport.vehicle') }}">Vozilo</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-bed" aria-hidden="true"></i> Hostel</li>
                                        <li><a href="{{ route('hostel.resident') }}">Resident</a></li>
                                        <li><a href="{{ route('hostel.resident.history') }}">Istorija residenta</a></li>
                                        <li><a href="{{ route('hostel') }}">Hostel Detalji</a></li>
                                        <li><a href="{{ route('hostel.food') }}">Hrana i obrok</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Upozorenje</li>
                                        <li><a href="{{ route('info.notice') }}">Obaveštenje za korisnika</a></li>
                                        <li><a href="{{ route('info.smsemail') }}">Pošalji SMS/Email</a></li>
                                        <li><a href="{{ route('setting.alert') }}">Uzorci upozorenja</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header"><i class="fa fa-th-list" aria-hidden="true"></i> Više</li>
                                        <li><a href="{{ route('meeting') }}">Sastanak/onlajn predavanje</a></li>
                                        <li><a href="{{ route('info.notice') }}">Zadatak</a></li>
                                        <li><a href="{{ route('info.smsemail') }}">Upload/Download</a></li>
                                        <li><a href="{{ route('info.smsemail') }}">Upload/Download</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        @endability
        @if(Auth::check())
            <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
            {!! Form::open(['route' => 'student', 'method' => 'GET', 'class' => 'navbar-form navbar-left form-search','role' => 'search',
                        "enctype" => "multipart/form-data"]) !!}
                    <div class="form-group">
                        <input type="text" name="fast_finder" placeholder="Search Students..." title="Search Student with : reg_no, university_reg, first_name, middle_name, last_name, gender, blood_group, nationality, religion, caste, mother_tongue, email"/>
                    </div>

                    <button type="submit" class="btn btn-mini btn-info2">
                        <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                    </button>
            {!! Form::close() !!}
        </nav>
        @endif

        @ability('super-admin', 'admin-control')
        <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="light-blue">
                    <a href="{{ route('web.home') }}" target="_blank">
                        <i class="ace-icon fa fa-globe bigger-180"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Admin kontrola
                        <i class="ace-icon fa fa-angle-down bigger-110"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                        <li> <a href="{{ route('user') }}"> <i class="ace-icon fa fa-users bigger-110 blue"></i> Korisnici </a></li>
                        <li> <a href="{{ route('role') }}"> <i class="ace-icon fa fa-certificate bigger-110 blue"></i> Uloge i dozvole </a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('setting.general') }}"><i class="fa fa-cog  bigger-110 blue"></i>&nbsp;Opšte postavke i brendiranje <span class="red">*</span></a></li>
                        <li><a href="{{ route('setting.online-registration') }}"><i class="fa fa-archive bigger-110 blue"></i> Online registracija</a></li>
                        <li><a href="{{ route('setting.meeting') }}"><i class="fa fa-video-camera bigger-110 blue"></i>&nbsp;Sastanak na daljinu</a></li>
                        <li><a href="{{ route('setting.sms') }}"><i class="fa fa-mobile bigger-110 blue"></i>&nbsp;SMS postavke</a></li>
                        <li><a href="{{ route('setting.email') }}"><i class="fa fa-envelope  bigger-110 blue"></i>&nbsp;E-Mail postavke</a></li>
                        <li><a href="{{ route('setting.alert') }}"><i class="fa fa-bell bigger-110 blue"></i>&nbsp;Upozorenje postavke predložaka</a></li>
                        <li><a href="{{ route('setting.payment-gateway') }}"><i class="fa fa-dollar  bigger-110 blue"></i>&nbsp;Gateway za plaćanje</a></li>
                        <li><a href="{{ route('payment-method') }}"><i class=" fa fa-dollar bigger-110 blue"></i> metode plaćanja</a></li>
                        <li class="divider"></li>
                        <li> <a href="{{ route('super-suit.user-activity') }}"> <i class="ace-icon fa fa-history bigger-110 blue"></i> Aktivnost korisnika </a></li>
                        <li> <a href="#"> <i class="ace-icon fa fa-database bigger-110 blue"></i> Backup baze podataka </a></li>
                        <li> <a href="#"> <i class="ace-icon fa fa-magnet bigger-110 blue"></i> Automatizacija / Cron posao </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        @endability
    </div><!-- /.navbar-container -->
</div>

