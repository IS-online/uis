<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('staff')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('staff') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Uposlenik detalji</a>
        <a class="{!! request()->is('staff/add*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registracija</a>
        <a class="{!! request()->is('staff/import*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.import') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Grupna registracija</a>
        <a class="{!! request()->is('staff/document*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.document') }}"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Dokumenti</a>
        <a class="{!! request()->is('staff/note*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.note') }}"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;Bilješke</a>
        <a class="{!! request()->is('account/payroll/balance')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.payroll.balance') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Platni spisak</a>
        <a class="{!! request()->is('library/staff*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('library.staff') }}"><i class="fa fa-book" aria-hidden="true"></i> Biblioteka</a>
        <a class="{!! request()->is('attendance/staff*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('attendance.staff') }}"><i class="fa fa-calendar" aria-hidden="true"></i> Prisustvo</a>
        <a class="{!! request()->is('staff/designation*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('staff.designation') }}"><i class="fa fa-star-half-full" aria-hidden="true"></i> Vrste</a>
    </div>
</div>
<hr class="hr-6">