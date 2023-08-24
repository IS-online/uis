<div class="table-responsive">
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>R.B.</th>
                <th>Un.br.</th>
                <th>Uposlenik</th>
                <th>Tip</th>
                <th>Datum rođenja</th>
                {{--<th>Godina</th>--}}
            </tr>
        </thead>
        <tbody>
        @if (isset($data['staff_birthday']) && $data['staff_birthday']->count() > 0)
            @php($i=1)
            @foreach($data['staff_birthday'] as $staff)
                <tr>
                    <td>{{ $i }}</td>
                    <td><a href="{{ route('staff.view', ['id' => $staff->id]) }}">{{ $staff->reg_no }}</a></td>
                    <td><a href="{{ route('staff.view', ['id' => $staff->id]) }}"> {{ $staff->first_name.' '.$staff->middle_name.' '. $staff->last_name }}</a></td>
                    <td>{{ ViewHelper::getDesignationId($staff->designation) }}</td>
                    <td>{{\Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d')}}</td>
                    {{--<td>{{\Carbon\Carbon::parse($staff->date_of_birth)->age}}</td>--}}
                </tr>
                @php($i++)
            @endforeach
        @else
            <tr>
                <td colspan="11">Nisu pronađeni podaci. Molim filtrirajte za prikaz. </td>
            </tr>
        @endif
        </tbody>
        <tfoot>
            <tr>
                <td class="text-center" colspan="5">{!! $data['staff_birthday']->appends($data['filter_query'])->links() !!}</td>
            </tr>
        </tfoot>
    </table>
</div>
