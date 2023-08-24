<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Platni spisak</h4>
        <div class="clearfix">
            <a class="label label-primary label-lg white" href="{{ route('print-out.payroll.staff-ledger', ['id' => $data['staff']->id]) }}" target="_blank">
                Štampaj Glavnu knjigu
                <i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
            </a>

            <label class="label label-info arrowed label-lg white">Ukupan iznos salda : {{ number_format($data['staff']->balance, 2) }}/-</label>
            <span>
                <a class="btn-warning btn-sm" href="{{ route('account.salary.payment.view', ['id' => $data['staff']->id]) }}">
                     <i class="fa fa-calculator" aria-hidden="true"></i> Isplatite platu sada
                 </a>
            </span>
        </div>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Pregled platnog spiska uposlenika u tabeli. Filtrirajte listu koristeći polje za pretragu po želji.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
                <thead class="header">
                    <tr role="row">
                    <th>R.B.</th>
                    <th>Naziv</th>
                    <th>Vrsta</th>
                    <th>Krajnji rok</th>
                    <th>Iznos </th>
                    <th>Akontacija </th>
                    <th>Porez </th>
                    <th>Plaćeno </th>
                    <th>Saldo </th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['payroll_master']) && $data['payroll_master']->count() > 0)
                    @php($i =1)
                    @foreach($data['payroll_master'] as $payrollMaster)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $payrollMaster->tag_line }}</td>
                            <td>{{ ViewHelper::getPayrollHeadById($payrollMaster->payroll_head) }}</td>
                            <td>{{ \Carbon\Carbon::parse($payrollMaster->fee_due_date)->format('Y-m-d')}}</td>
                            <td>{{ $payrollMaster->amount }}</td>
                            <td>{{ $payrollMaster->paySalary()->sum('allowance') }}</td>
                            <td>{{ $payrollMaster->paySalary()->sum('fine') }}</td>
                            <td>{{ $payrollMaster->paySalary()->sum('paid_amount') }}</td>
                            <td>
                                {{
                                    $net_balance = ($payrollMaster->amount - ($payrollMaster->paySalary()->sum('paid_amount') + $payrollMaster->paySalary()->sum('fine')))+ $payrollMaster->paySalary()->sum('allowance')
                                }}
                            </td>
                            <td align="left">
                                @if($net_balance == 0)
                                    <span class="label label-success">Plaćeno</span>
                                @elseif($net_balance < 0 )
                                    <span class="label label-danger">Minus</span>
                                @elseif($net_balance < $payrollMaster->amount)
                                    <span class="label label-warning">Parcijalno</span>
                                @else
                                    <span class="label label-danger">Dug</span>
                                @endif
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">Podaci o platama nisu pronađeni</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>