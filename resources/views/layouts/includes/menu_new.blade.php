<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <a class="btn btn-success" href="{{route('dashboard')}}" title="Dashboard">
                <i class="ace-icon fa fa-signal"></i>
            </a>

            <a class="btn btn-info" href="{{route('account.fees.quick-receive')}}">
                <i class="ace-icon fa fa-calculator"></i>
            </a>

            <a class="btn btn-warning" href="{{route('user')}}">
                <i class="ace-icon fa fa-users"></i>
            </a>

            <a class="btn btn-danger" href="{{route('setting.general')}}">
                <i class="ace-icon fa fa-cogs"></i>
            </a>


        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div>
    <!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list hidden-print">
        {{-- Dashboard --}}
        <li class="{!! request()->is('dashboard')?'active':'' !!}">
            <a href="{{ route('dashboard') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        {{-- Web Portal --}}
        @ability('super-admin','web-cms')
            @if( isset($generalSetting) && $generalSetting->web_cms ==1)
                <li class="{!! request()->is('web*')?'active open':'' !!} ">
                    <a href="{{route('web.admin.dashboard')}}">
                        <i class="menu-icon fa fa-globe" aria-hidden="true"></i>
                        <span class="menu-text">  Web CMS</span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                </li>
            @endif
        @endability

        @ability('super-admin','front-office')
        @if( isset($generalSetting) && $generalSetting->front_desk ==1)
            <li class="{!! request()->is('student*')?'active open':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Student
                    <b class="arrow fa fa-angle-r"></b>
                </a>
                <b class="arrow"></b>
            <li class="{!! request()->is('front*')?'active open':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-sign-out" aria-hidden="true"></i>
                    <span class="menu-text"> Front Desk</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class=">
                        <a href="{{ route('front.postal-exchange') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Po分ta ulaz/izlaz
                        </a>
                    </li>

                    <li class=">
                        <a href="{{ route('front.visitor') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Evidencija posjeta
                        </a>
                    </li>

                    {{-- <li class=">
                         <a href="#" class="dropdown-toggle">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Inquiry
                         </a>
                     </li>--}}
                </ul>
            </li>
        @endif
        @endability

        {{-- Staff & Student --}}
        @ability('super-admin','student-staff')
        @if( isset($generalSetting) && $generalSetting->student_staff ==1)
            <li class="{!! request()->is('student*')||request()->is('staff*')?'active open':'' !!} ">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users" aria-hidden="true"></i>
                    <span class="menu-text"> Student&Uposlenik</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('student*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student')?'active':'' !!}">
                                <a href="{{ route('student') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/registration')?'active':'' !!}">
                                <a href="{{ route('student.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/import')?'active':'' !!}">
                                <a href="{{ route('student.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Masovni uvoz
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/transfer')?'active':'' !!}">
                                <a href="{{ route('student.transfer') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Transfer studenta
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('student/document')?'active':'' !!}">
                                <a href="{{ route('student.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Upload dokumenta
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/note')?'active':'' !!}">
                                <a href="{{ route('student.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreiranje bilješke
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('report/student*')?'active':'' !!}">
                                <a href="{{ route('report.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kompletna evidencija studenata
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('guardian*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Mentor
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('guardian')?'active':'' !!}">
                                <a href="{{ route('guardian') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mentor detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('guardian/registration')?'active':'' !!}">
                                <a href="{{ route('guardian.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('staff*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Uposlenik
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('staff')?'active':'' !!} ">
                                <a href="{{ route('staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Uposlenik detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/add')?'active':'' !!} ">
                                <a href="{{ route('staff.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('staff/import')?'active':'' !!}">
                                <a href="{{ route('staff.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Masovni uvoz
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/document')?'active':'' !!}">
                                <a href="{{ route('staff.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Upload Document
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/note')?'active':'' !!}">
                                <a href="{{ route('staff.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreiraj bilješku
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/designation')?'active':'' !!}">
                                <a href="{{ route('staff.designation') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Vrste
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('report/staff*')?'active':'' !!}">
                                <a href="{{ route('report.staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kompletna evidencija usposlenika
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endif
        @endability

        {{-- Account --}}
        @ability('super-admin','account')
        @if( isset($generalSetting) && $generalSetting->account ==1)
            <li class="{!! request()->is('account/*')?'active open':'' !!} ">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                    <span class="menu-text"> Računovodstvo</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('account/fees*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-calculator"></i>  Naplata naknada
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/fees')?'active':'' !!} ">
                                <a href="{{ route('account.fees') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Uplate detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/quick-receive')?'active':'' !!} ">
                                <a href="{{ route('account.fees.quick-receive') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Uplata
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/collection')?'active':'' !!}">
                                <a href="{{ route('account.fees.collection') }}" accesskey="R">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prikupljanje naknada
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/balance')?'active':'' !!} ">
                                <a href="{{ route('account.fees.balance') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Saldo naknada
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/master/add')?'active':'' !!}">
                                <a href="{{ route('account.fees.master.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj naknadu
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/online-payment')?'active':'' !!}">
                                <a href="{{ route('account.fees.online-payment') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Online plaćanje
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/head')?'active':'' !!} ">
                                <a href="{{ route('account.fees.head') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrsta naknade
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="divider"></li>

                    <li class="{!! request()->is('account.transaction*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-newspaper-o"></i> Knjiga i transakcije
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/transaction/add')?'active':'' !!}">
                                <a href="{{ route('account.transaction.add') }}">
                                    <i class="menu-icon fa fa-plus"></i>
                                    Transakcija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction/multi-add')?'active':'' !!}">
                                <a href="{{ route('account.transaction.multi-add') }}">
                                    <i class="menu-icon fa fa-plus"></i>
                                    Više transakcija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction')?'active':'' !!}">
                                <a href="{{ route('account.transaction') }}" accesskey="R">
                                    <i class="menu-icon fa fa-list"></i>
                                    Detalji transakcije
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transfer')?'active':'' !!}">
                                <a href="{{ route('account.transfer') }}">
                                    <i class="menu-icon fa fa-exchange"></i>
                                    Transfer sa računa na račun
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction-head')?'active':'' !!}">
                                <a href="{{ route('account.transaction-head') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Knjiga/Račun
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction/account-group')?'active':'' !!}">
                                <a href="{{ route('account.transaction.account-group') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Grupe računa
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('account/transaction/account-group/chart-of-account')?'active':'' !!}">
                                <a href="{{ route('account.transaction.account-group.chart-of-account') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Kontni planovi
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('account/bank*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-bank"></i> Odvojeno bankarstvo
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/bank')?'active':'' !!}">
                                <a href="{{ route('account.bank') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Upravljajte bankovnim računima
                                </a>
                            </li>
                            <li class="{!! request()->is('account/bank/add')?'active':'' !!}">
                                <a href="{{ route('account.bank.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj novu banku
                                </a>
                            </li>

                            <li class="{!! request()->is('account/bank-transaction')?'active':'' !!}">
                                <a href="{{ route('account.bank-transaction') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji transakcije
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/bank-transaction/add')?'active':'' !!}">
                                <a href="{{ route('account.bank-transaction.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nova transakcija
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="divider"></li>

                    <li class="{!! request()->is('account/payroll*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-user-secret"></i>  Platni spisak
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/payroll')?'active':'' !!} ">
                                <a href="{{ route('account.payroll') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji plaćanja
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/salary/payment')?'active':'' !!}">
                                <a href="{{ route('account.salary.payment') }}" accesskey="R">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Isplata plata
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/master*')?'active':'' !!}">
                                <a href="{{ route('account.payroll.master.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj platni spisak
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/balance')?'active':'' !!} ">
                                <a href="{{ route('account.payroll.balance') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Izvještaj o bilansu plata
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/head')?'active':'' !!} ">
                                <a href="{{ route('account.payroll.head') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrste plata
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="{!! request()->is('account/report*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-print"></i> Izvještaj o računu
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/report/cash-book*')?'active':'' !!}">
                                <a href="{{ route('account.report.cash-book') }}">
                                    <i class="menu-icon fa fa-rupee"></i>
                                    Knjiga blagajne
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-collection')?'active':'' !!}">
                                <a href="{{ route('account.report.fee-collection') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Naplata naknada
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-online-payment')?'active':'' !!}">
                                <a href="{{ route('account.report.fee-online-payment') }}">
                                    <i class="menu-icon fa fa-globe"></i>
                                    Online plaćanja
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-collection-head*')?'active':'' !!}">
                                <a href="{{ route('account.report.fee-collection-head') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Naplata naknada - vrste
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/balance-fee*')?'active':'' !!}">
                                <a href="{{ route('account.report.balance-fee') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Saldo naknada
                                </a>
                            </li>

                            <li class="{!! request()->is('account/transaction-head/view*')?'active':'' !!}">
                                <a href="{{ route('account.transaction-head.view') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Izvod glavne knjige
                                </a>
                            </li>
                            <li class="{!! request()->is('account/transaction-head/balance-statement*')?'active':'' !!}">
                                <a href="{{ route('account.transaction-head.balance-statement') }}" accesskey="B">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Stanje glavne knjige
                                </a>
                            </li>

                            <li class="{!! request()->is('account/transaction/account-group/chart-of-account')?'active':'' !!}">
                                <a href="{{ route('account.transaction.account-group.chart-of-account') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Kontni planovi
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
        @endif
        @endability

        @ability('super-admin','inventory')
        @if( isset($generalSetting) && $generalSetting->inventory ==1)
            <li class="{!! request()->is('inventory*') /*|| request()->is('product*') || request()->is('customer*') || request()->is('vendor*')*/ ?'active open':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-shopping-cart"></i>
                    Stalna sredstva (Store)
                    <b class="arrow fa fa-angle-r"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('inventory/assets*') || request()->is('inventory/sem-assets*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-store"></i> Klase imovine
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/assets')?'active':'' !!}">
                                <a href="{{ route('inventory.assets') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Imovina
                                </a>
                            </li>
                            <li class="{!! request()->is('inventory/sem-assets')?'active':'' !!}">
                                <a href="{{ route('inventory.sem-assets') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Imovina Fakulteti
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/product*')?'active open':'' !!} ">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text">Proizvod/Imovina</span>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/product/registration*')?'active':'' !!}">
                                <a href="{{ route('inventory.product.registration') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-plus"></i> Proizvod
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/product')?'active':'' !!}">
                                <a href="{{ route('inventory.product') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list"></i> Proizvod detalji
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/product/category*')?'active':'' !!}">
                                <a href="{{ route('inventory.product.category') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list-alt"></i> Kategorija
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/customer*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kupac
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/customer')?'active':'' !!}">
                                <a href="{{ route('inventory.customer') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kupac detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/customer/registration')?'active':'' !!}">
                                <a href="{{ route('inventory.customer.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/customer/document')?'active':'' !!}">
                                <a href="{{ route('inventory.customer.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dokument Upload
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/customer/note')?'active':'' !!}">
                                <a href="{{ route('inventory.customer.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreiraj bilješku
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/vendor*')?'active open':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Dobavljač
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/vendor')?'active':'' !!}">
                                <a href="{{ route('inventory.vendor') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dobavljač detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/registration')?'active':'' !!}">
                                <a href="{{ route('inventory.vendor.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/vendor/document')?'active':'' !!}">
                                <a href="{{ route('inventory.vendor.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dokument Upload
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/note')?'active':'' !!}">
                                <a href="{{ route('inventory.vendor.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreiraj bilješku
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="{!! request()->is('vendor')?'active':'' !!}">
                         <a href="{{ route('vendor') }}" accesskey="S">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Dobavljač detalji
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('vendor/registration')?'active':'' !!}">
                         <a href="{{ route('vendor.registration') }}">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Registracija
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('customer')?'active':'' !!}">
                         <a href="{{ route('customer') }}" accesskey="S">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Detalji o kupcu
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('customer/registration')?'active':'' !!}">
                         <a href="{{ route('customer.registration') }}">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Registracija
                         </a>

                         <b class="arrow"></b>
                     </li>--}}

                </ul>
            </li>
        @endif
        @endability

        {{-- Library --}}
        @ability('super-admin','library')
        @if( isset($generalSetting) && $generalSetting->library ==1)
            <li class="{!! request()->is('library*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                    <span class="menu-text">Biblioteka</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('library/book*')?'active':'' !!}">
                        <a href="{{ route('library.book') }}" accesskey="L" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Knjige
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('library/member*')?'active':'' !!}">
                                <a href="{{ route('library.book') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Knjiga detalji
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('library/book/add*')?'active':'' !!}">
                                <a href="{{ route('library.book.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj novu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('library/book/import*')?'active':'' !!}">
                                <a href="{{ route('library.book.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grupni uvoz
                                </a>

                                <b class="arrow"></b>
                            </li>


                            <li class="{!! request()->is('library/book/category*')?'active':'' !!}">
                                <a href="{{ route('library.book.category') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kategorija
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('library/member*') || request()->is('library/student*') || request()->is('library/staff*') ?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Članovi
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('library/member*')?'active':'' !!}">
                                <a href="{{ route('library.member') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Članstvo
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('library/student*')?'active':'' !!}">
                                <a href="{{ route('library.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Članstvo studenti
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('library/staff*')?'active':'' !!}">
                                <a href="{{ route('library.staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Članstvo uposlenici
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('library/issue-history*')?'active':'' !!}">
                        <a href="{{ route('library.issue-history') }}">
                            <i class="menu-icon fa fa-history"></i>
                            Istorija izdavanja
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('library/return-over*')?'active':'' !!}">
                        <a href="{{ route('library.return-over') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Period povratka je završen
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('library/circulation*')?'active':'' !!} ">
                        <a href="{{ route('library.circulation') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Podešavanje cirkulacije
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        @endif
        @endability

        {{-- Attendance --}}
        @ability('super-admin','attendance')
        @if( isset($generalSetting) && $generalSetting->attendance ==1)
            <li class="{!! request()->is('attendance*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                    <span class="menu-text"> Prisustvo</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class=">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student Attendance
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('attendance/student*')?'active':'' !!}">
                                <a href="{{ route('attendance.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vannastavno prisustvo
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('attendance/subject*')?'active':'' !!}">
                                <a href="{{ route('attendance.subject') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nastavno prisustvo
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('attendance/staff*')?'active':'' !!}">
                        <a href="{{ route('attendance.staff') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Prisustvo uposlenika
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('attendance/master*')?'active':'' !!}">
                        <a href="{{ route('attendance.master') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Mjesečni kalendar
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
        @endif
        @endability

        {{-- Examination --}}
        @ability('super-admin','examination')
        @if( isset($generalSetting) && $generalSetting->exam == 1)
            <li class="{!! request()->is('exam*') || request()->is('mcq*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                    <span class="menu-text"> Ispiti</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('mcq*')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text"> Online - MCQ Ispiti</span>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class=">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Question Bank
                                    <b class="arrow fa fa-angle-r"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="{!! request()->is('mcq/question/index*')?'active':'' !!}">
                                        <a href="{{ route('mcq.question.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Pitanja
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    <li class="{!! request()->is('mcq/question/question-group*')?'active':'' !!}">
                                        <a href="{{ route('mcq.question.question-group') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Grupa
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    <li class="{!! request()->is('mcq/question/question-level*')?'active':'' !!}">
                                        <a href="{{ route('mcq.question.question-level') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Nivo
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="{!! request()->is('mcq/exam/exam-instruction*')?'active':'' !!} ">
                                <a href="{{ route('mcq.exam.exam-instruction') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Instrukcije
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam')?'active':'' !!}">
                                <a href="{{ route('exam') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Online ispit
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('exam*')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text"> Offline - ispiti</span>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{!! request()->is('exam/schedule*')?'active':'' !!}">
                                <a href="{{ route('exam.schedule') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Raspored ispita
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam/mark-ledger')?'active':'' !!} ">
                                <a href="{{ route('exam.mark-ledger') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Knjiga ocjena
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam')?'active':'' !!}">
                                <a href="{{ route('exam') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrste ispita
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam/admit-card*')?'active':'' !!}">
                                <a href="{{ route('exam.admit-card') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prijava ispita
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('exam/routine*')?'active':'' !!}">
                                <a href="{{ route('exam.routine') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Rutina/Raspored
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('exam/mark-sheet*')?'active':'' !!}">
                                <a href="{{ route('exam.mark-sheet') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ocjene/Evidencije
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>
        @endif
        @endability

        {{-- Certificate --}}
        @ability('super-admin','certificate')
        @if( isset($generalSetting) && $generalSetting->certificate ==1)
            <li class="{!! request()->is('certificate*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-certificate"  aria-hidden="true"></i>
                    <span class="menu-text"> Certifikat</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('certificate/issue')?'active':'' !!}">
                        <a href="{{ route('certificate.issue') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Izdavanje potvrde
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/attendance*')?'active':'' !!}">
                        <a href="{{ route('certificate.attendance') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o pohađanju
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/transfer*')?'active':'' !!}">
                        <a href="{{ route('certificate.transfer') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o transferu
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/character*')?'active':'' !!}">
                        <a href="{{ route('certificate.character') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o podobnosti
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/bonafide*')?'active':'' !!}">
                        <a href="{{ route('certificate.bonafide') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o školovanju
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/course-completion*')?'active':'' !!}">
                        <a href="{{ route('certificate.course-completion') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Završetak kursa Cer.
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/issue-history*')?'active':'' !!}">
                        <a href="{{ route('certificate.issue-history') }}">
                            <i class="menu-icon fa fa-history"></i>
                            Istorija izdavanja
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/generate*')?'active':'' !!}">
                        <a href="{{ route('certificate.generate') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Prilagođeno štampanje
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="{!! request()->is('certificate/template*')?'active':'' !!}">
                        <a href="{{ route('certificate.template') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Predložak certifikata
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        @endif
        @endability

        {{-- Hostel --}}
        @ability('super-admin','hostel')
        @if( isset($generalSetting) && $generalSetting->hostel ==1)
            <li class="{!! request()->is('hostel*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                    <span class="menu-text"> Hostels </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('hostel/resident*')?'active':'' !!}">
                        <a href="{{ route('hostel.resident') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Rezident
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('hostel/resident')?'active':'' !!}">
                                <a href="{{ route('hostel.resident') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('hostel/resident/add')?'active':'' !!}">
                                <a href="{{ route('hostel.resident.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/resident/history')?'active':'' !!}">
                                <a href="{{ route('hostel.resident.history') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Istorija stanara
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="{!! request()->is('hostel') || request()->is('hostel/room-type')?'active':'' !!}">
                        <a href="{{ route('hostel') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Hostel
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">

                            <li class="{!! request()->is('hostel*')?'active':'' !!}">
                                <a href="{{ route('hostel') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Hostel
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/room-type*')?'active':'' !!}">
                                <a href="{{ route('hostel.room-type') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tip sobe
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('hostel/food*')?'active':'' !!}">
                        <a href="{{ route('hostel') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Hrana i obrok
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('hostel/food*')?'active':'' !!}">
                                <a href="{{ route('hostel.food') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Raspored obroka
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/eating-time*')?'active':'' !!}">
                                <a href="{{ route('hostel.food.eating-time') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrijeme za jelo
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/category*')?'active':'' !!}">
                                <a href="{{ route('hostel.food.category') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kategorija hrane
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/item*')?'active':'' !!}">
                                <a href="{{ route('hostel.food.item') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prehrambeni artikl
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endif
        @endability

        {{-- Transport --}}
        @ability('super-admin','transport')
        @if( isset($generalSetting) && $generalSetting->transport ==1)
            <li class="{!! request()->is('transport*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                    <span class="menu-text"> Transport </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('transport/user*')?'active':'' !!}">
                        <a href="{{ route('transport.user') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Putnik/Korisnik
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('transport/user')?'active':'' !!}">
                                <a href="{{ route('transport.user') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('transport/user/add')?'active':'' !!}">
                                <a href="{{ route('transport.user.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('transport/user/history')?'active':'' !!}">
                                <a href="{{ route('transport.user.history') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Istorija korisnika
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="{!! request()->is('transport/route*')?'active':'' !!}">
                        <a href="{{ route('transport.route') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Ruta
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('transport/vehicle*')?'active':'' !!}">
                        <a href="{{ route('transport.vehicle') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Vozilo
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
        @endif
        @endability

        {{-- More --}}
        {{-- @ability('super-admin','assignment,download,meeting')
             <li class=">
                 <a href="#" class="dropdown-toggle">
                     <i class="menu-icon  fa fa-th-list" aria-hidden="true"></i>
                     <span class="menu-text"> More </span>

                     <b class="arrow fa fa-angle-down"></b>
                 </a>
                 <b class="arrow"></b>
                 <ul class="submenu">
                     @ability('super-admin','assignment')
                         @if( isset($generalSetting) && $generalSetting->assignment ==1)
                             <li class="{!! request()->is('assignment')?'active':'' !!}">
                             <a href="{{ route('assignment') }}">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Prisutvo
                             </a>
                             <b class="arrow"></b>
                         </li>
                         @endif
                     @endability

                     @ability('super-admin','download')
                         @if( isset($generalSetting) && $generalSetting->upload_download ==1)
                             <li class="{!! request()->is('download*')?'active':'' !!}">
                             <a href="{{ route('download') }}">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Upload & Download
                                 <b class="arrow fa fa-angle-r"></b>
                             </a>
                         </li>
                         @endif
                     @endability

                     @ability('super-admin','meeting')
                     @if( isset($generalSetting) && $generalSetting->meeting ==1)
                         <li class="{!! request()->is('meeting*')?'active':'' !!}">
                             <a href="{{ route('meeting') }}">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Sastanak - Online učenje
                                 <b class="arrow fa fa-angle-r"></b>
                             </a>
                         </li>
                     @endif
                     @endability
                 </ul>
             </li>
         @endability--}}

        @ability('super-admin','assignment')
        @if( isset($generalSetting) && $generalSetting->assignment ==1)
            <li class="{!! request()->is('assignment')?'active':'' !!}">
                <a href="{{ route('assignment') }}">
                    <i class="menu-icon fa fa-tasks"></i>
                    Zadatak
                </a>
                <b class="arrow"></b>
            </li>
        @endif
        @endability

        @ability('super-admin','download')
        @if( isset($generalSetting) && $generalSetting->upload_download ==1)
            <li class="{!! request()->is('download*')?'active':'' !!}">
                <a href="{{ route('download') }}">
                    <i class="menu-icon fa fa-download"></i>
                    Download
                    <b class="arrow fa fa-angle-r"></b>
                </a>
            </li>
        @endif
        @endability

        @ability('super-admin','meeting')
        @if( isset($generalSetting) && $generalSetting->meeting ==1)
            <li class="{!! request()->is('meeting*')?'active':'' !!}">
                <a href="{{ route('meeting') }}">
                    <i class="menu-icon fa fa-video-camera"></i>
                    Sastanak
                    <b class="arrow fa fa-angle-r"></b>
                </a>
            </li>
        @endif
        @endability


        {{-- Reports --}}
        @ability('super-admin','report')
        {{--<li class="{!! request()->is('report*')?'active':'' !!}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bar-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Linkovi za izvještaje</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{!! request()->is('report/student*')?'active':'' !!}">
                    <a href="{{ route('report.student') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Detalji o studentima
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="{!! request()->is('report/staff*')?'active':'' !!}">
                    <a href="{{ route('report.staff') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Detalji o uposleniku
                    </a>

                    <b class="arrow"></b>
                </li>
                @ability('super-admin','fees-index')
                <li class="{!! request()->is('account/fees')?'active':'' !!}">
                    <a href="{{ route('account.fees') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Izjava o naknadama
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','fees-balance')
                <li class="{!! request()->is('account/fees/balance')?'active':'' !!}">
                    <a href="{{ route('account.fees.balance') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Naknade
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','payroll-balance')
                <li class="{!! request()->is('account/payroll/balance')?'active':'' !!}">
                    <a href="{{ route('account.payroll.balance') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vrste plata
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transaction-head-index')
                <li class="{!! request()->is('account/transaction-head')?'active':'' !!}">
                    <a href="{{ route('account.transaction-head') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Glavna knjiga
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transaction-index')
                <li class="{!! request()->is('account/transaction')?'active':'' !!}">
                    <a href="{{ route('account.transaction') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Transakcije
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','bank-index')
                <li class="{!! request()->is('account/bank')?'active':'' !!}">
                    <a href="{{ route('account.bank') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Izvod iz banke
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','library-issue-history')
                <li class="{!! request()->is('library/issue-history')?'active':'' !!}">
                    <a href="{{ route('library.issue-history') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Istorija idavanja knjiga
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','library-return-over')
                <li class="{!! request()->is('library/return-over')?'active':'' !!}">
                    <a href="{{ route('library.return-over') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Period povrata knjige je istekao
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','student-attendance-index')
                <li class="{!! request()->is('attendance/student')?'active':'' !!}">
                    <a href="{{ route('attendance.student') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Prisustvo studenata
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','staff-attendance-index')
                <li class="{!! request()->is('attendance/staff')?'active':'' !!}">
                    <a href="{{ route('attendance.staff') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Prisustvo uposlenika
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','resident-history')
                <li class="{!! request()->is('hostel/resident/history')?'active':'' !!}">
                    <a href="{{ route('hostel.resident.history') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Istorija hostela
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transport-user-history')
                <li class="{!! request()->is('transport/user/history')?'active':'' !!}">
                    <a href="{{ route('transport.user.history') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Istorija transporta
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability
            </ul>
        </li>--}}
        @endability

        {{-- Info Center --}}
        @ability('super-admin','alert-center')
        @if( isset($generalSetting) && $generalSetting->alert ==1)
            <li class="{!! request()->is('info*')?'active':'' !!}">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-bullhorn" aria-hidden="true"></i>
                    <span class="menu-text"> Upozorenje </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('info/notice*')?'active':'' !!}">
                        <a href="{{ route('info.notice') }}" accesskey="L">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Obaveštenje za korisnika
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="{!! request()->is('info/smsemail*')?'active':'' !!}">
                        <a href="{{ route('info.smsemail') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            SMS / E-mail
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
        @endif
        @endability

        {{-- Academic --}}
        @ability('super-admin','academic')
        @if( isset($generalSetting) && $generalSetting->academic ==1)
            <li class=">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="menu-text"> Academics </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('faculty*') || request()->is('semester*')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Akademski nivo
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('faculty*')?'active':'' !!}">
                                <a href="{{ route('faculty') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Fakultet/nivo
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('semester*')?'active':'' !!}">
                                <a href="{{ route('semester') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Semestar
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student-batch*')?'active':'' !!}">
                                <a href="{{ route('student-batch') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Period
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="{!! request()->is('grading*') || request()->is('subject*')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Ocjenjivanje/predmet
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('subject*')?'active':'' !!}">
                                <a href="{{ route('subject') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Predmet / Predmet
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('grading*')?'active':'' !!}">
                                <a href="{{ route('grading') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ocjenjivanje
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('*status')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Podešavanje statusa
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student-status*')?'active':'' !!}">
                                <a href="{{ route('student-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student status
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('attendance-status*')?'active':'' !!}">
                                <a href="{{ route('attendance-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status prisustva
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('book-status*')?'active':'' !!}">
                                <a href="{{ route('book-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status knjiga
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('bed-status*')?'active':'' !!}">
                                <a href="{{ route('bed-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                        Status kreveta u hostelu
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('customer-status*')?'active':'' !!}">
                                <a href="{{ route('customer-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status korisnika
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>


                    <li class="{!! request()->is('year*') || request()->is('month*')?'active':'' !!}">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Godina i mjesec
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('year*')?'active':'' !!}">
                                <a href="{{ route('year') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Godina
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('month*')?'active':'' !!}">
                                <a href="{{ route('month') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mjesec
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('day*')?'active':'' !!}">
                                <a href="{{ route('day') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dan
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endif
        @endability



        {{-- Help --}}
        @ability('super-admin','help')
            @if( isset($generalSetting) && $generalSetting->help ==1)
                <li class=">
                    <a href="#" target="_blank" class="dropdown-toggle">
                        <i class="menu-icon  fa fa-question" aria-hidden="true"></i>
                        <span class="menu-text"> Help </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class=">
                            <a href="{{route('license-info')}}" target="_self">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Licenca Info
                            </a>
                        </li>
                        <li class=">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Na zahtjev
                            </a>
                        </li>
                        <li class=">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Uskoro
                            </a>
                        </li>
                        <li class=">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Dokomantacija - uskoro
                            </a>
                        </li>
                        <li class=">
                            <a href="https://meho.solutions/" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Kupite licencu
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        @endability
    </ul><!-- /.nav-list -->
</div>

