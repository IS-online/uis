<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="{!! request()->is('info/smsemail')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalji</a>
        <a class="{!! request()->is('info/smsemail/create')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail.create') }}"><i class="fa fa-group" aria-hidden="true"></i>&nbsp;Grupna poruka</a>
        <a class="{!! request()->is('info/smsemail/student-guardian')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail.student-guardian') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Student i mentor</a>
        <a class="{!! request()->is('info/smsemail/staff')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail.staff') }}"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Uposlenik</a>
        <a class="{!! request()->is('info/smsemail/individual')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail.individual') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Individualno</a>
        {{--<a class="{!! request()->is('info/smsemail/checkSmsCredit')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('info.smsemail.checkSmsCredit') }}"><i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Provjeri SMS kredit</a>--}}

    </div>
</div>
<hr class="hr-6">