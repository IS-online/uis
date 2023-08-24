<table>
    <thead>
        <tr>
            <th>R.B.</th>
            <th>Fakultet/Odsjek</th>
            <th>Sem./Sec.</th>
            <th>Reg. br.</th>
            <th>Reg. Datum</th>
            <th>Univerzitet Reg.</th>
            <th>Ime studenta</th>
            <th>Datum rođenja</th>
            <th>Pol</th>
            <th>Krvna grupa</th>
            <th>Nacionalnost</th>
            <th>Maternji jezik</th>
            <th>Email</th>
            <th>Adresa</th>
            <th>Kanton</th>
            <th>Država</th>
            <th>Privremena Adresa</th>
            <th>Privremeni kanton</th>
            <th>Privremena država</th>
            <th>Kućni telefon</th>
            <th>Mobilni 1</th>
            <th>Mobilni 2</th>
            <th>Akademski status</th>
            <th>Status</th>
            <th>Ime djeda</th>
            <th>Ime oca</th>
            <th>Obrazovanje oca</th>
            <th>Zanimanje oca</th>
            <th>Adresa kancelarije</th>
            <th>Broj kancelarije oca</th>
            <th>Matični boj oca</th>
            <th>Otac mobilni 1</th>
            <th>Otac mobilni 2</th>
            <th>Otac Email</th>
            <th>Ime majke</th>
            <th>Obrazovanje majke</th>
            <th>Zanimanje majke</th>
            <th>Adresa kancelarije</th>
            <th>Broj kancelarije majke</th>
            <th>Matični boj majke</th>
            <th>Majka mobilni 1</th>
            <th>Majka mobilni 2</th>
            <th>Majka Email</th>
            <th>Ime mentora</th>
            <th>Podobnost Mentora</th>
            <th>Mentor zanimanje</th>
            <th>Mentor kancelarija</th>
            <th>Mentor kancelarija br.</th>
            <th>Mentor matični broj</th>
            <th>Mentor broj mobitela 1</th>
            <th>Mentor broj mobitela 1</th>
            <th>Mentor Email</th>
            <th>Rodbinska veza</th>
            <th>Mentor Address</th>
            <th>Extra Info</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($students) && $students->count() > 0)
        @php($i=1)
        @foreach($students as $student)
            <tr>
                <td>{{ $i }}</td>
                <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                <td>{{ $student->reg_no }}</td>
                <td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}} </td>
                <td>{{ $student->university_reg }}</td>
                <td>{{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</td>
                <td>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d')}}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->blood_group }}</td>
                <td>{{ $student->nationality }}</td>
                <td>{{ $student->mother_tongue }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->state }}</td>
                <td>{{ $student->country }}</td>
                <td>{{ $student->temp_address }}</td>
                <td>{{ $student->temp_state }}</td>
                <td>{{ $student->temp_country }}</td>
                <td>{{ $student->home_phone }}</td>
                <td>{{ $student->mobile_1}}  </td>
                <td>{{ $student->mobile_2}}</td>
                <td>{{ ViewHelper::getStudentAcademicStatusId($student->academic_status) }}</td>
                <td>{{ $student->status=="active"?"Active":"In-Active" }}</td>
                <td>{{ $student->grandfather_first_name.' '.$student->grandfather_middle_name.' '. $student->grandfather_last_name }}</td>
                <td>{{ $student->father_first_name.' '.$student->father_middle_name.' '. $student->father_last_name }}</td>
                <td>{{ $student->father_eligibility }}</td>
                <td>{{ $student->father_occupation }}</td>
                <td>{{ $student->father_office }}</td>
                <td>{{ $student->father_office_number }}</td>
                <td>{{ $student->father_residence_number }}</td>
                <td>{{ $student->father_mobile_1 }}</td>
                <td>{{ $student->father_mobile_2 }}</td>
                <td>{{ $student->father_email }}</td>
                <td>{{ $student->mother_first_name.' '.$student->mother_middle_name.' '. $student->mother_last_name }}</td>
                <td>{{ $student->mother_eligibility }}</td>
                <td>{{ $student->mother_occupation }}</td>
                <td>{{ $student->mother_office }}</td>
                <td>{{ $student->mother_office_number }}</td>
                <td>{{ $student->mother_residence_number }}</td>
                <td>{{ $student->mother_mobile_1 }}</td>
                <td>{{ $student->mother_mobile_2 }}</td>
                <td>{{ $student->mother_email }}</td>
                <td>{{ $student->guardian_first_name.' '.$student->guardian_middle_name.' '. $student->guardian_last_name }}</td>
                <td>{{ $student->guardian_eligibility }}</td>
                <td>{{ $student->guardian_occupation }}</td>
                <td>{{ $student->guardian_office }}</td>
                <td>{{ $student->guardian_office_number }}</td>
                <td>{{ $student->guardian_residence_number }}</td>
                <td>{{ $student->guardian_mobile_1 }}</td>
                <td>{{ $student->guardian_mobile_2 }}</td>
                <td>{{ $student->guardian_email }}</td>
                <td>{{ $student->guardian_relation }}</td>
                <td>{{ $student->guardian_address }}</td>
                <td>{{ $student->extra_info }}</td>
            </tr>
            @php($i++)
        @endforeach
    @endif
    </tbody>
</table>