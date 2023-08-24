<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="{!! request()->is('account/fees/master')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.fees.master') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detalji o naknadama</a>
        <a class="{!! request()->is('account/fees/master/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.master.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Dodajte naknade</a>
        <a class="{!! request()->is('account/fees/collection')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.collection') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Prikupljajte naknade</a>
        <a class="{!! request()->is('account/fees/balance')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.balance') }}"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Provizija</a>
        <a class="{!! request()->is('account/fees/head')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('account.fees.head') }}"><i class="fa fa-header" aria-hidden="true"></i>&nbsp;Vrste naknada</a>
    </div>
</div>
<hr class="hr-6">