<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>KOD</th>
            <th>NAZIV</th>
            <th></th>
        </tr>
        </thead>

        <tbody id="subject_wrapper">

        @if (isset($data['html']))

            {!! $data['html'] !!}

        @endif

        </tbody>

    </table>
</div>