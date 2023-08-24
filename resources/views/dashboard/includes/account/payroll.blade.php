<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead class="thin-border-bottom">
    <tr>
        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>R.B.
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>Un.Br.
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>Platiti za
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>Datum
        </th>

        <th>
            <i class="ace-icon fa fa-dollar blue"></i>Iznos
        </th>
    </tr>
    </thead>

    <tbody>

    @if (isset($data['recent_payroll_pay']) && $data['recent_payroll_pay']->count() > 0)
        @php($i=1)
        @foreach($data['recent_payroll_pay'] as $salaryPay)
            <tr>
                <td>{{ $i }}</td>
                <td>
                    <a class="blue" href="{{ route('account.salary.payment.view', ['id' => $salaryPay->staff_id]) }}">
                        {{ $salaryPay->reg_no }}
                    </a>
                </td>
                <td>{{ $salaryPay->title }}</td>
                <td>{{ \Carbon\Carbon::parse($salaryPay->date)->format('Y-m-d') }}</td>
                <td>
                    <b>{{ $salaryPay->paid_amount }}</b>
                </td>
            </tr>
            @php($i++)
        @endforeach
        <tr>
            <td class="center" colspan="5">
                <a class="green" href="{{ route('account.payroll.balance') }}">More</a>
            </td>
        </tr>
    @else
        <tr>
            <td colspan="5">Nema podataka.</td>
        </tr>
    @endif

    </tbody>
</table>
</div>