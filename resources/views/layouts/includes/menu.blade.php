<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state hidden-print">
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
                <li class="{!! request()->is('web*')?'active open':'' !!}  hover">
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
            <li class="{!! request()->is('front*')?'active open':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-sign-out" aria-hidden="true"></i>
                    <span class="menu-text"> Front Desk</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="hover">
                        <a href="{{ route('front.postal-exchange') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pošta ulaz/izlaz
                        </a>
                    </li>

                    <li class="hover">
                        <a href="{{ route('front.visitor') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Evidencija posjeta
                        </a>
                    </li>

                    {{-- <li class="hover">
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
            <li class="{!! request()->is('student*')||request()->is('staff*')?'active open':'' !!}  hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users" aria-hidden="true"></i>
                    <span class="menu-text"> Student&Uposlenik</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('student*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student')?'active':'' !!} hover">
                                <a href="{{ route('student') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Student detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/registration')?'active':'' !!} hover">
                                <a href="{{ route('student.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/import')?'active':'' !!} hover">
                                <a href="{{ route('student.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grupni uvoz
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/transfer')?'active':'' !!} hover">
                                <a href="{{ route('student.transfer') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Transfer studenta
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('student/document')?'active':'' !!} hover">
                                <a href="{{ route('student.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prenos dokumenta
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student/note')?'active':'' !!} hover">
                                <a href="{{ route('student.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreirajte bilješke
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('report/student*')?'active':'' !!} hover">
                                <a href="{{ route('report.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kompletna evidencija studenata
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('guardian*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Mentor
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('guardian')?'active':'' !!} hover">
                                <a href="{{ route('guardian') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mentor detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('guardian/registration')?'active':'' !!} hover">
                                <a href="{{ route('guardian.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('staff*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Uposlnici
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('staff')?'active':'' !!}  hover">
                                <a href="{{ route('staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Uposlenici detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/add')?'active':'' !!}  hover">
                                <a href="{{ route('staff.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('staff/import')?'active':'' !!} hover">
                                <a href="{{ route('staff.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Grupni uvoz
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/document')?'active':'' !!} hover">
                                <a href="{{ route('staff.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prenos dokumenta
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/note')?'active':'' !!} hover">
                                <a href="{{ route('staff.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreirajte bilješke
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('staff/designation')?'active':'' !!} hover">
                                <a href="{{ route('staff.designation') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Uloga
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('report/staff*')?'active':'' !!} hover">
                                <a href="{{ route('report.staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kompletna evidencija uposlnika
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
            <li class="{!! request()->is('account/*')?'active open':'' !!}  hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                    <span class="menu-text"> Računovodstvo</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('account/fees*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-calculator"></i>  Naplata naknada
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/fees')?'active':'' !!}  hover">
                                <a href="{{ route('account.fees') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji uplate
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/quick-receive')?'active':'' !!}  hover">
                                <a href="{{ route('account.fees.quick-receive') }}" accesskey="C">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Brzi prijem
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/collection')?'active':'' !!} hover">
                                <a href="{{ route('account.fees.collection') }}" accesskey="R">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prikupljene uplate
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/balance')?'active':'' !!}  hover">
                                <a href="{{ route('account.fees.balance') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Izvjestaj o uplatama
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/master/add')?'active':'' !!} hover">
                                <a href="{{ route('account.fees.master.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj naknadu
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/online-payment')?'active':'' !!} hover">
                                <a href="{{ route('account.fees.online-payment') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Online uplate
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/fees/head')?'active':'' !!}  hover">
                                <a href="{{ route('account.fees.head') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrste naknada
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li class="{!! request()->is('account/report*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-print"></i> Izvještaj o naknadama
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/report/cash-book*')?'active':'' !!} hover">
                                <a href="{{ route('account.report.cash-book') }}">
                                    <i class="menu-icon fa fa-rupee"></i>
                                    Knjiga blagajne
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-collection')?'active':'' !!} hover">
                                <a href="{{ route('account.report.fee-collection') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Naplata naknada
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-online-payment')?'active':'' !!} hover">
                                <a href="{{ route('account.report.fee-online-payment') }}">
                                    <i class="menu-icon fa fa-globe"></i>
                                    Online plaćanja
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/fee-collection-head*')?'active':'' !!} hover">
                                <a href="{{ route('account.report.fee-collection-head') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Izvještaj po vrsti naknade
                                </a>
                            </li>

                            <li class="{!! request()->is('account/report/balance-fee*')?'active':'' !!} hover">
                                <a href="{{ route('account.report.balance-fee') }}">
                                    <i class="menu-icon fa fa-calculator"></i>
                                    Saldo naknada
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>


                    <li class="{!! request()->is('account.transaction*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-newspaper-o"></i> Glavna knjiga transakcija
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/transaction/add')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction.add') }}">
                                    <i class="menu-icon fa fa-plus"></i>
                                    Transakcije
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction/multi-add')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction.multi-add') }}">
                                    <i class="menu-icon fa fa-plus"></i>
                                    Zbirne transakcije
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction') }}" accesskey="R">
                                    <i class="menu-icon fa fa-list"></i>
                                    Detalji transakcije
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transfer')?'active':'' !!} hover">
                                <a href="{{ route('account.transfer') }}">
                                    <i class="menu-icon fa fa-exchange"></i>
                                    Transfer sa računa na račun
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction-head')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction-head') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    GK vrste
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/transaction/account-group')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction.account-group') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Grupe računa
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('account/transaction/account-group/chart-of-account')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction.account-group.chart-of-account') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Kontni planovi
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('account/bank*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-bank"></i> Bankarstvo
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/bank')?'active':'' !!} hover">
                                <a href="{{ route('account.bank') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bankovni računi
                                </a>
                            </li>
                            <li class="{!! request()->is('account/bank/add')?'active':'' !!} hover">
                                <a href="{{ route('account.bank.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj banku
                                </a>
                            </li>

                            <li class="{!! request()->is('account/bank-transaction')?'active':'' !!} hover">
                                <a href="{{ route('account.bank-transaction') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji transakcije
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/bank-transaction/add')?'active':'' !!} hover">
                                <a href="{{ route('account.bank-transaction.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Nova transakcija
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="divider"></li>

                    <li class="{!! request()->is('account/payroll*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-user-secret"></i>  Platni spisak
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/payroll')?'active':'' !!}  hover">
                                <a href="{{ route('account.payroll') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Plate pregled
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/salary/payment')?'active':'' !!} hover">
                                <a href="{{ route('account.salary.payment') }}" accesskey="R">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Spiskovi
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/master*')?'active':'' !!} hover">
                                <a href="{{ route('account.payroll.master.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodavanje plate
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/balance')?'active':'' !!}  hover">
                                <a href="{{ route('account.payroll.balance') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Izvještaj o platama
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('account/payroll/head')?'active':'' !!}  hover">
                                <a href="{{ route('account.payroll.head') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrste isplata
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="{!! request()->is('account/report*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-print"></i> Izvještaji o računima
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('account/transaction-head/view*')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction-head.view') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Knjiga izvoda
                                </a>
                            </li>
                            <li class="{!! request()->is('account/transaction-head/balance-statement*')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction-head.balance-statement') }}" accesskey="B">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Stanje glavne knjige
                                </a>
                            </li>

                            <li class="{!! request()->is('account/transaction/account-group/chart-of-account')?'active':'' !!} hover">
                                <a href="{{ route('account.transaction.account-group.chart-of-account') }}">
                                    <i class="menu-icon fa fa-newspaper-o"></i>
                                    Računi
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
            <li class="{!! request()->is('inventory*')?'active open':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-shopping-cart"></i>
                    Stalna sredstva
                    <b class="arrow fa fa-angle-r"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('inventory/assets*') || request()->is('inventory/sem-assets*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <i class="fa fa-store"></i> Kalse imovine
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/assets')?'active':'' !!} hover">
                                <a href="{{ route('inventory.assets') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Imovina
                                </a>
                            </li>
                            <li class="{!! request()->is('inventory/sem-assets')?'active':'' !!} hover">
                                <a href="{{ route('inventory.sem-assets') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Fakulteti imovina
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/product*')?'active open':'' !!}  hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text">Proizvod imovina</span>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/product/registration*')?'active':'' !!} hover">
                                <a href="{{ route('inventory.product.registration') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-plus"></i> Proizvod
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/product')?'active':'' !!} hover">
                                <a href="{{ route('inventory.product') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list"></i> Proizvod detalji
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/product/category*')?'active':'' !!} hover">
                                <a href="{{ route('inventory.product.category') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <i class="fa fa-list-alt"></i> Kategorija
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/customer*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kupac
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/customer')?'active':'' !!} hover">
                                <a href="{{ route('inventory.customer') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kupac detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/customer/registration')?'active':'' !!} hover">
                                <a href="{{ route('inventory.customer.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/customer/document')?'active':'' !!} hover">
                                <a href="{{ route('inventory.customer.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dokument Upload
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/customer/note')?'active':'' !!} hover">
                                <a href="{{ route('inventory.customer.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreirajte bilješke
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/vendor*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Dobavljač
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/vendor')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dobavljač detalji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/registration')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/vendor/document')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dokument Upload
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/note')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.note') }}">
                                    <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                    Kreirajte bilješke
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/vendor*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kupovina
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/vendor')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji kupovine
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/registration')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kupiti sada
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/vendor/document')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kupovina Povrat
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('inventory/vendor*')?'active open':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Prodaja
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('inventory/vendor')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor') }}" accesskey="S">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pojedinosti o prodaji
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('inventory/vendor/registration')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.registration') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prodaja sada
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('inventory/vendor/document')?'active':'' !!} hover">
                                <a href="{{ route('inventory.vendor.document') }}"  accesskey="U">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prodaja povrat
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="{!! request()->is('vendor')?'active':'' !!} hover">
                         <a href="{{ route('vendor') }}" accesskey="S">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Detalji o dobavljaču
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('vendor/registration')?'active':'' !!} hover">
                         <a href="{{ route('vendor.registration') }}">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Registracija
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('customer')?'active':'' !!} hover">
                         <a href="{{ route('customer') }}" accesskey="S">
                             <i class="menu-icon fa fa-caret-right"></i>
                             Detalji o kupcu
                         </a>

                         <b class="arrow"></b>
                     </li>

                     <li class="{!! request()->is('customer/registration')?'active':'' !!} hover">
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
            <li class="{!! request()->is('library*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                    <span class="menu-text">Biblioteka</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('library/book*')?'active':'' !!} hover">
                        <a href="{{ route('library.book') }}" accesskey="L" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Knjige
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('library/member*')?'active':'' !!} hover">
                                <a href="{{ route('library.book') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Knjiga detalji
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('library/book/add*')?'active':'' !!} hover">
                                <a href="{{ route('library.book.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dodaj novu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('library/book/import*')?'active':'' !!} hover">
                                <a href="{{ route('library.book.import') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Uvoz knjiga
                                </a>

                                <b class="arrow"></b>
                            </li>


                            <li class="{!! request()->is('library/book/category*')?'active':'' !!} hover">
                                <a href="{{ route('library.book.category') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kategorije
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('library/member*') || request()->is('library/student*') || request()->is('library/staff*') ?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Članovi
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('library/member*')?'active':'' !!} hover">
                                <a href="{{ route('library.member') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Članstvo
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('library/student*')?'active':'' !!} hover">
                                <a href="{{ route('library.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Studenti
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('library/staff*')?'active':'' !!} hover">
                                <a href="{{ route('library.staff') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Osoblje
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('library/request*') ?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Zahtjev za rezervaciju
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('library/request-student*')?'active':'' !!} hover">
                                <a href="{{ route('library.student-request') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Studenti
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('library/request-staff*')?'active':'' !!} hover">
                                <a href="{{ route('library.staff-request') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Osoblje
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="{!! request()->is('library/issue-history*')?'active':'' !!} hover">
                        <a href="{{ route('library.issue-history') }}">
                            <i class="menu-icon fa fa-history"></i>
                            Izdavanje
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('library/return-over*')?'active':'' !!} hover">
                        <a href="{{ route('library.return-over') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Kašnjenja
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('library/circulation*')?'active':'' !!}  hover">
                        <a href="{{ route('library.circulation') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Periodi izdavanja
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
            <li class="{!! request()->is('attendance*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                    <span class="menu-text"> Prisustvo</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Student 
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('attendance/student*')?'active':'' !!} hover">
                                <a href="{{ route('attendance.student') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vannastavne aktivnosti
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('attendance/subject*')?'active':'' !!} hover">
                                <a href="{{ route('attendance.subject') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prisustvo nastavi
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('attendance/staff*')?'active':'' !!} hover">
                        <a href="{{ route('attendance.staff') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Prisustvo uposlenika
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('attendance/master*')?'active':'' !!} hover">
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
            <li class="{!! request()->is('exam*') || request()->is('mcq*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                    <span class="menu-text"> Ispiti</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
				{{--
                    <li class="{!! request()->is('mcq*')?'active':'' !!} hover">
				--}}
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text"> Online - ispiti</span>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="hover">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Baza pitanja
                                    <b class="arrow fa fa-angle-r"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="{!! request()->is('mcq/question/index*')?'active':'' !!} hover">
                                        <a href="{{ route('mcq.question.index') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Pitanje
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    <li class="{!! request()->is('mcq/question/question-group*')?'active':'' !!} hover">
                                        <a href="{{ route('mcq.question.question-group') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Grupa
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    <li class="{!! request()->is('mcq/question/question-level*')?'active':'' !!} hover">
                                        <a href="{{ route('mcq.question.question-level') }}">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Nivo
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>

                            <li class="{!! request()->is('mcq/exam/exam-instruction*')?'active':'' !!}  hover">
                                <a href="{{ route('mcq.exam.exam-instruction') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Instrukcije
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('mcq/exam')?'active':'' !!} hover">
                                <a href="{{ route('mcq.exam.index') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Online ispit
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('exam*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            <span class="menu-text"> Offline - ispiti</span>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="{!! request()->is('exam/schedule*')?'active':'' !!} hover">
                                <a href="{{ route('exam.schedule') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Raspored ispita
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam/mark-ledger')?'active':'' !!}  hover">
                                <a href="{{ route('exam.mark-ledger') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Rezultati ispita
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam')?'active':'' !!} hover">
                                <a href="{{ route('exam') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kreiranje ispita
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('exam/admit-card*')?'active':'' !!} hover">
                                <a href="{{ route('exam.admit-card') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Prijava ispita
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('exam/routine*')?'active':'' !!} hover">
                                <a href="{{ route('exam.routine') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Odobrenje ispita
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('exam/mark-sheet*')?'active':'' !!} hover">
                                <a href="{{ route('exam.mark-sheet') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ocjena/Glavna knjiga
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
            <li class="{!! request()->is('certificate*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-certificate"  aria-hidden="true"></i>
                    <span class="menu-text"> Certifikat</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('certificate/issue')?'active':'' !!} hover">
                        <a href="{{ route('certificate.issue') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                                Izdavanje potvrde
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/attendance*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.attendance') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o upisu
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/transfer*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.transfer') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o transferu
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/character*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.character') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Certifikat o podobnosti
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/bonafide*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.bonafide') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Uvjerenje o studentskom statusu
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/course-completion*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.course-completion') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Završetak kursa Cer.
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/nirgam-utara*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.nirgam-utara') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Testiranje certifikata
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/issue-history*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.issue-history') }}">
                            <i class="menu-icon fa fa-history"></i>
                            Istorija izdavanja
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('certificate/generate*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.generate') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Prilagođeno štampanje
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="{!! request()->is('certificate/template*')?'active':'' !!} hover">
                        <a href="{{ route('certificate.template') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Predlošci 
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
            <li class="{!! request()->is('hostel*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                    <span class="menu-text"> Hostels </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('hostel/resident*')?'active':'' !!} hover">
                        <a href="{{ route('hostel.resident') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Rezident
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('hostel/resident')?'active':'' !!} hover">
                                <a href="{{ route('hostel.resident') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('hostel/resident/add')?'active':'' !!} hover">
                                <a href="{{ route('hostel.resident.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/resident/history')?'active':'' !!} hover">
                                <a href="{{ route('hostel.resident.history') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Istorija stanara
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="{!! request()->is('hostel') || request()->is('hostel/room-type')?'active':'' !!} hover">
                        <a href="{{ route('hostel') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Hostel
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">

                            <li class="{!! request()->is('hostel*')?'active':'' !!} hover">
                                <a href="{{ route('hostel') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Hostel
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/room-type*')?'active':'' !!} hover">
                                <a href="{{ route('hostel.room-type') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Tip sobe
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('hostel/food*')?'active':'' !!} hover">
                        <a href="{{ route('hostel') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Hrana i obrok
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('hostel/food*')?'active':'' !!} hover">
                                <a href="{{ route('hostel.food') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Raspored obroka
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/eating-time*')?'active':'' !!} hover">
                                <a href="{{ route('hostel.food.eating-time') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vrijeme za jelo
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/category*')?'active':'' !!} hover">
                                <a href="{{ route('hostel.food.category') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Kategorija hrane
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('hostel/food/item*')?'active':'' !!} hover">
                                <a href="{{ route('hostel.food.item') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    prehrambeni artikl
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
            <li class="{!! request()->is('transport*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                    <span class="menu-text"> Transport </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('transport/user*')?'active':'' !!} hover">
                        <a href="{{ route('transport.user') }}" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Putnik/Korisnik
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('transport/user')?'active':'' !!} hover">
                                <a href="{{ route('transport.user') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Detalji
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('transport/user/add')?'active':'' !!} hover">
                                <a href="{{ route('transport.user.add') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registracija
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('transport/user/history')?'active':'' !!} hover">
                                <a href="{{ route('transport.user.history') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Istorija korisnika
                                </a>
                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="{!! request()->is('transport/route*')?'active':'' !!} hover">
                        <a href="{{ route('transport.route') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Routa
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="{!! request()->is('transport/vehicle*')?'active':'' !!} hover">
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
             <li class="hover">
                 <a href="#" class="dropdown-toggle">
                     <i class="menu-icon  fa fa-th-list" aria-hidden="true"></i>
                     <span class="menu-text"> Više </span>

                     <b class="arrow fa fa-angle-down"></b>
                 </a>
                 <b class="arrow"></b>
                 <ul class="submenu">
                     @ability('super-admin','assignment')
                         @if( isset($generalSetting) && $generalSetting->assignment ==1)
                             <li class="{!! request()->is('assignment')?'active':'' !!} hover">
                             <a href="{{ route('assignment') }}">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Zadatak
                             </a>
                             <b class="arrow"></b>
                         </li>
                         @endif
                     @endability

                     @ability('super-admin','download')
                         @if( isset($generalSetting) && $generalSetting->upload_download ==1)
                             <li class="{!! request()->is('download*')?'active':'' !!} hover">
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
                         <li class="{!! request()->is('meeting*')?'active':'' !!} hover">
                             <a href="{{ route('meeting') }}">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Sastanak - Online nastava
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
            <li class="{!! request()->is('assignment')?'active':'' !!} hover">
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
            <li class="{!! request()->is('download*')?'active':'' !!} hover">
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
            <li class="{!! request()->is('meeting*')?'active':'' !!} hover">
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
        {{--<li class="{!! request()->is('report*')?'active':'' !!} hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bar-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Linkovi za izvještaje</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{!! request()->is('report/student*')?'active':'' !!} hover">
                    <a href="{{ route('report.student') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Detalji o studentima
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="{!! request()->is('report/staff*')?'active':'' !!} hover">
                    <a href="{{ route('report.staff') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Detalj o uposlenicima
                    </a>

                    <b class="arrow"></b>
                </li>
                @ability('super-admin','fees-index')
                <li class="{!! request()->is('account/fees')?'active':'' !!} hover">
                    <a href="{{ route('account.fees') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Izjava o naknadama
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','fees-balance')
                <li class="{!! request()->is('account/fees/balance')?'active':'' !!} hover">
                    <a href="{{ route('account.fees.balance') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vrste naknada
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','payroll-balance')
                <li class="{!! request()->is('account/payroll/balance')?'active':'' !!} hover">
                    <a href="{{ route('account.payroll.balance') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vrste plata
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transaction-head-index')
                <li class="{!! request()->is('account/transaction-head')?'active':'' !!} hover">
                    <a href="{{ route('account.transaction-head') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Glavna knjiga
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transaction-index')
                <li class="{!! request()->is('account/transaction')?'active':'' !!} hover">
                    <a href="{{ route('account.transaction') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                            Transakcije
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','bank-index')
                <li class="{!! request()->is('account/bank')?'active':'' !!} hover">
                    <a href="{{ route('account.bank') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Izvod iz banke
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','library-issue-history')
                <li class="{!! request()->is('library/issue-history')?'active':'' !!} hover">
                    <a href="{{ route('library.issue-history') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Istorija izdavanja biblioteke
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','library-return-over')
                <li class="{!! request()->is('library/return-over')?'active':'' !!} hover">
                    <a href="{{ route('library.return-over') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Period povrata knjige je istekao
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','student-attendance-index')
                <li class="{!! request()->is('attendance/student')?'active':'' !!} hover">
                    <a href="{{ route('attendance.student') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Prisustvo studenata
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','staff-attendance-index')
                <li class="{!! request()->is('attendance/staff')?'active':'' !!} hover">
                    <a href="{{ route('attendance.staff') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Prisustvo uposlenika
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','resident-history')
                <li class="{!! request()->is('hostel/resident/history')?'active':'' !!} hover">
                    <a href="{{ route('hostel.resident.history') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Hostel istorija
                    </a>
                    <b class="arrow"></b>
                </li>
                @endability

                @ability('super-admin','transport-user-history')
                <li class="{!! request()->is('transport/user/history')?'active':'' !!} hover">
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
            <li class="{!! request()->is('info*')?'active':'' !!} hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-bullhorn" aria-hidden="true"></i>
                    <span class="menu-text"> Upozorenje </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="{!! request()->is('info/notice*')?'active':'' !!} hover">
                        <a href="{{ route('info.notice') }}" accesskey="L">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Obaveštenje za korisnika
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="{!! request()->is('info/smsemail*')?'active':'' !!} hover">
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
            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon  fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="menu-text"> Academsko </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="{!! request()->is('faculty*') || request()->is('semester*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Akademski nivo
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('faculty*')?'active':'' !!} hover">
                                <a href="{{ route('faculty') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Fakultet/Odsjek
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('semester*')?'active':'' !!} hover">
                                <a href="{{ route('semester') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Sesestar
                                </a>
                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('student-batch*')?'active':'' !!} hover">
                                <a href="{{ route('student-batch') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Period
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="{!! request()->is('grading*') || request()->is('subject*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Ocjenjivanje/predmet
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('subject*')?'active':'' !!} hover">
                                <a href="{{ route('subject') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Predmet / Predmet
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('grading*')?'active':'' !!} hover">
                                <a href="{{ route('grading') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Ocjenjivanje
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="{!! request()->is('*status')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Podešavanje statusa
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('student-status*')?'active':'' !!} hover">
                                <a href="{{ route('student-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status studenta
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('attendance-status*')?'active':'' !!} hover">
                                <a href="{{ route('attendance-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status prisustva
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('book-status*')?'active':'' !!} hover">
                                <a href="{{ route('book-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status knjiga
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="{!! request()->is('bed-status*')?'active':'' !!} hover">
                                <a href="{{ route('bed-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status kreveta u hostelu
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('customer-status*')?'active':'' !!} hover">
                                <a href="{{ route('customer-status') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Status korisnika
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>


                    <li class="{!! request()->is('year*') || request()->is('month*')?'active':'' !!} hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Godina i mjesec
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="{!! request()->is('year*')?'active':'' !!} hover">
                                <a href="{{ route('year') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Godina
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('month*')?'active':'' !!} hover">
                                <a href="{{ route('month') }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mjesec
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="{!! request()->is('day*')?'active':'' !!} hover">
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
                <li class="hover">
                    <a href="#" target="_blank" class="dropdown-toggle">
                        <i class="menu-icon  fa fa-question" aria-hidden="true"></i>
                        <span class="menu-text"> Help </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="hover">
                            <a href="{{route('license-info')}}" target="_self">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Informacije o licenci
                            </a>
                        </li>
                        <li class="hover">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Test Demo
                            </a>
                        </li>
                        <li class="hover">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Video Tutorial - uskoro
                            </a>
                        </li>
                        <li class="hover">
                            <a href="#" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Documentation - uskoro
                            </a>
                        </li>
                        <li class="hover">
                            <a href="https://meho.solutions" target="_blank">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Kupite novu licencu
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        @endability
    </ul><!-- /.nav-list -->
</div>

