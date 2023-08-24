<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Pregled prevoz</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Tabelarni pregled prevoz. Filtrirajte listu koristeći polje za pretragu po želji.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
                <thead >
                <tr>
                    <th>R.B.</th>
                    <th>Godina</th>
                    <th>Relacija</th>
                    <th>Vozilo</th>
                    <th>Istorija</th>
                    <th>Datum</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['transport_history']) && $data['transport_history']->count() > 0)
                    @php($i=1)
                    @foreach($data['transport_history'] as $history)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ ViewHelper::getYearById($history->years_id) }} </td>
                            <td>{{ ViewHelper::getRouteNameById($history->routes_id) }} </td>
                            <td>{{ ViewHelper::getVehicleById($history->vehicles_id) }}</td>
                            <td>
                                <label class="label label-primary">{{$history->history_type}}</label>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($history->created_at)->format('Y-m-d')}} </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">Podaci o prevozu nisu pronađeni.  </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>