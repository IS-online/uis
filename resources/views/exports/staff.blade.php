<table>
    <thead>
     <tr>
        <th>R.B.</th>
        <th>Reg. br.</th>
        <th>Datum pristupa</th>
        <th>Ime</th>
        <th>Tip</th>
        <th>Ime oca</th>
        <th>Ime majke</th>
        <th>Datum rođenja</th>
        <th>Rod</th>
        <th>Krvna grupa</th>
        <th>Nacionalnost</th>
        <th>Maternji jezik</th>
        <th>Adresa</th>
        <th>Kanton</th>
        <th>Država</th>
        <th>Privremena adresa</th>
        <th>Privremeni kanton</th>
        <th>Privremena država</th>
        <th>Telefon kuća</th>
        <th>Mobitel 1</th>
        <th>Mobitel 2</th>
        <th>Email</th>
        <th>Kvalifikacija</th>
        <th>Iskustvo</th>
        <th>Iskustvo info</th>
        <th>Ostale Informacije</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        @if (isset($staffs) && $staffs->count() > 0)
            @php($i=1)
            @foreach($staffs as $staff)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $staff->reg_no }}</td>
                    <td>{{ \Carbon\Carbon::parse($staff->join_date)->format('Y-m-d')}} </td>
                    <td>{{ $staff->first_name.' '.$staff->middle_name.' '. $staff->last_name }}</td>
                    <td>{{ ViewHelper::getDesignationId($staff->designation) }}</td>
                    <td>{{ $staff->father_name }}</td>
                    <td>{{ $staff->mother_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d')}} </td>
                    <td>{{ $staff->gender }}</td>
                    <td>{{ $staff->blood_group }}</td>
                    <td>{{ $staff->nationality }}</td>
                    <td>{{ $staff->mother_tongue }}</td>
                    <td>{{ $staff->address }}</td>
                    <td>{{ $staff->state }}</td>
                    <td>{{ $staff->country }}</td>
                    <td>{{ $staff->temp_address }}</td>
                    <td>{{ $staff->temp_state }}</td>
                    <td>{{ $staff->temp_country }}</td>
                    <td>{{ $staff->home_phone }}</td>
                    <td>{{ $staff->mobile_1}} </td>
                    <td>{{ $staff->mobile_2}} </td>
                    <td>{{ $staff->email }}</td>
                    <td>{{ $staff->qualification }}</td>
                    <td>{{ $staff->experience }}</td>
                    <td>{{ $staff->experience_info }}</td>
                    <td>{{ $staff->other_info }}</td>
                    <td>{{ $staff->status=="active"?"Active":"In-Active" }}</td>
                </tr>
                @php($i++)
            @endforeach
        @endif
    </tbody>
</table>