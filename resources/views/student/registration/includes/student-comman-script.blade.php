<script type="text/javascript">

    $(document).ready(function () {
        //validation
        $("#add-student").click(function () {
            registrationValidation();
        });

        $("#add-student-another").click(function () {
            registrationValidation();
        });

        function registrationValidation(){
            var flag = false;
            var reg_date = $('input[name="reg_date"]').val();
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semester"]').val();
            var batch = $('select[name="batch"]').val();
            var academic_status = $('select[name="academic_status"]').val();
            var first_name = $('input[name="first_name"]').val();
            var last_name = $('input[name="last_name"]').val();
            var date_of_birth = $('input[name="date_of_birth"]').val();
            var gender = $('select[name="gender"]').val();
            var nationality = $('input[name="nationality"]').val();
            var mobile_1 = $('input[name="mobile_1"]').val();
            var address = $('input[name="address"]').val();
            var state = $('input[name="state"]').val();
            var country = $('input[name="country"]').val();

            if (reg_date !== '') {

            }else{
                toastr.warning("Molimo unesite datum registracije.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (faculty > 0 && semester > 0) {

            }else{
                toastr.warning("Molimo, odaberite Fakultet/Odsjek & Semestar.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }


            if (batch > 0) {

            }else{
                toastr.warning("Molimo odaberite period", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }


            if (academic_status >0) {

            }else{
                toastr.warning("Molimo, odaberite Akademski status", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (first_name !== "" && last_name !=="") {

            }else{
                toastr.warning("Molimo unesite ime i prezime studenta", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (date_of_birth !== '') {

            }else{
                toastr.warning("Molimo unesite datum rođenja.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (gender !== '') {

            }else{
                toastr.warning("Molimo, odaberite Pol.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (nationality !== '') {

            }else{
                toastr.warning("Molimo, unesite nacionalnost.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (mobile_1 !== '') {

            }else{
                toastr.warning("Unesite broj mobilnog telefona.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (address !== '' && state !== '' && country !== '') {

            }else{
                toastr.warning("Molimo, unesite adresu, kanton i podatke o državi.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            var father_first_name = $('input[name="father_first_name"]').val();
            var father_last_name = $('input[name="father_last_name"]').val();
            var mother_first_name = $('input[name="mother_first_name"]').val();
            var mother_last_name = $('input[name="mother_last_name"]').val();

            if (father_first_name !== '' && father_last_name !== '') {

            }else{
                toastr.warning("Molimo unesite ime i prezime oca.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            if (mother_first_name !== '' && mother_last_name !== '') {

            }else{
                toastr.warning("Molimo unesite ime i prezime majke.", "Info:");
                activeGeneralInfo();
                flag = true;
                return false;
            }

            var guardian_is = $('input[name="guardian_is"]:checked').val();

            if(guardian_is == 'father_as_guardian' || guardian_is == 'mother_as_guardian' || guardian_is == 'other_guardian'){
                var guardian_first_name = $('input[name="guardian_first_name"]').val();
                var guardian_last_name = $('input[name="guardian_last_name"]').val();
                var guardian_relation = $('input[name="guardian_relation"]').val();
                if (guardian_first_name !== '' && guardian_last_name !== '' && guardian_relation !== '') {

                }else{
                    toastr.warning("Molimo unesite ime, prezime mentora i relaciju.", "Info:");
                    activeGeneralInfo();
                    flag = true;
                    return false;
                }
            }else{
                removeRequiredFieldInGuardian();
                var guardian_link_id = $('select[name="guardian_link_id"]').val();
                if (guardian_link_id !=="" && guardian_link_id > 0) {

                }else{
                    toastr.warning("Molimo, pronađite i povežite informacije o mentoru", "Info:");
                    activeGeneralInfo();
                    flag = true;
                    return false;
                }
            }

            if(flag){
                toastr.warning("Nešto nije u redu, provjerite", "Info:");
                activeGeneralInfo();
                $('#validation-form').submit(function(){
                    return false;
                });
            }
        }


        $('#load-academicinfo-html').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{ route('student.academicInfo-html') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    var data = $.parseJSON(response);

                    if (data.error) {
                        //$.notify(data.message, "warning");
                    } else {

                        $('#academicInfo_wrapper').append(data.html);
                        //$(document).find('option[value="0"]').attr("value", "");
                    }
                }
            });

        });

        document.getElementById('guardian-detail').style.display = 'block';
        document.getElementById('link-guardian-detail').style.display = 'none';

        /*link guardian*/
        $('select[name="guardian_link_id"]').select2({
            placeholder: 'Odaberite mentora...',
            ajax: {
                url: '{{ route('student.guardian-name-autocomplete') }}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: data
                    };

                },
                cache: true
            }

        });

        $('#load-guardian-html-btn').click(function () {

            var guardians_id = $('select[name="guardian_link_id"]').val();
            if (!guardians_id)
                toastr.warning("Molimo, prvo pronađite mentora.", "Warning");
            else {
                $('#guardian_wrapper').empty();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('student.guardianInfo-html') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: guardians_id
                    },
                    success: function (response) {
                        var data = $.parseJSON(response);
                        if (data.error) {
                            toastr.warning(data.message, "warning");
                        } else {

                            $('#guardian_wrapper').append(data.html);
                            //toastr.success(data.message, "success");
                        }
                    }
                });
            }
        });

    });


    /*Change Field Value on Capital Letter When Keyup*/
    $(function() {
        $('.upper').keyup(function() {
            this.value = this.value.toUpperCase();
        });
    });
    /*end capital function*/


    function loadSemesters($this) {

        $.ajax({
            type: 'POST',
            url: '{{ route('student.find-semester') }}',
            data: {
                _token: '{{ csrf_token() }}',
                faculty_id: $this.value
            },
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.error) {
                    $.notify(data.message, "warning");
                } else {
                    $('.semester').html('').append('<option value="0">Odaberite semestar</option>');
                    $.each(data.semester, function(key,valueObj){
                        $('.semester').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                    });
                }
            }
        });

    }

    /*copy permanent address on temporary address*/
    function CopyAddress(f) {
        if(f.permanent_address_copier.checked == true) {
            f.temp_address.value = f.address.value;
            f.temp_state.value = f.state.value;
            f.temp_country.value = f.country.value;
        }
    }

    /*copy Father Detail on Guardian Detail*//*guardian_is*/
    function FatherAsGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        document.getElementById('link-guardian-detail').style.display = 'none';
        addRequiredFieldInGuardian();
        if(f.guardian_is.value == 'father_as_guardian') {
            f.guardian_first_name.value = f.father_first_name.value;
            f.guardian_middle_name.value = f.father_middle_name.value;
            f.guardian_last_name.value = f.father_last_name.value;
            f.guardian_eligibility.value = f.father_eligibility.value;
            f.guardian_occupation.value = f.father_occupation.value;
            f.guardian_office.value = f.father_office.value;
            f.guardian_office_number.value = f.father_office_number.value;
            f.guardian_residence_number.value = f.father_residence_number.value;
            f.guardian_mobile_1.value = f.father_mobile_1.value;
            f.guardian_mobile_2.value = f.father_mobile_2.value;
            f.guardian_email.value = f.father_email.value;
            f.guardian_relation.value = "OTAC";
            f.mother_as_guardian.checked == false;
            f.other_guardian.checked == false;
        }
    }

    /*copy Mother Detail on Guardian Detail*/
    function MotherAsGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        document.getElementById('link-guardian-detail').style.display = 'none';
        addRequiredFieldInGuardian();
        if(f.guardian_is.value == 'mother_as_guardian') {
            f.guardian_first_name.value = f.mother_first_name.value;
            f.guardian_middle_name.value = f.mother_middle_name.value;
            f.guardian_last_name.value = f.mother_last_name.value;
            f.guardian_eligibility.value = f.mother_eligibility.value;
            f.guardian_occupation.value = f.mother_occupation.value;
            f.guardian_office.value = f.mother_office.value;
            f.guardian_office_number.value = f.mother_office_number.value;
            f.guardian_residence_number.value = f.mother_residence_number.value;
            f.guardian_mobile_1.value = f.mother_mobile_1.value;
            f.guardian_mobile_2.value = f.mother_mobile_2.value;
            f.guardian_email.value = f.mother_email.value;
            f.guardian_relation.value = "MAJKA";
            f.father_as_guardian.checked == false;
            f.other_guardian.checked == false;
        }
    }

    /*Blank Guardian Detail to Enter New*/
    function OtherGuardian(f) {
        document.getElementById('guardian-detail').style.display = 'block';
        document.getElementById('link-guardian-detail').style.display = 'none';
        addRequiredFieldInGuardian();
        if(f.guardian_is.value == 'other_guardian') {
            f.guardian_first_name.value = "";
            f.guardian_middle_name.value = "";
            f.guardian_last_name.value = "";
            f.guardian_eligibility.value = "";
            f.guardian_occupation.value = "";
            f.guardian_office.value = "";
            f.guardian_office_number.value = "";
            f.guardian_residence_number.value = "";
            f.guardian_mobile_1.value = "";
            f.guardian_mobile_2.value = "";
            f.guardian_email.value = "";
            f.guardian_relation.value = "";
            f.father_as_guardian.checked == false;
            f.mother_as_guardian.checked == false;
        }
    }

    function linkGuardian() {
        document.getElementById('guardian-detail').style.display = 'none';
        document.getElementById('link-guardian-detail').style.display = 'block';
        removeRequiredFieldInGuardian();
        f.guardian_first_name.value = f.father_first_name.value;
        f.guardian_middle_name.value = f.father_middle_name.value;
        f.guardian_last_name.value = f.father_last_name.value;
        f.guardian_eligibility.value = f.father_eligibility.value;
        f.guardian_occupation.value = f.father_occupation.value;
        f.guardian_office.value = f.father_office.value;
        f.guardian_office_number.value = f.father_office_number.value;
        f.guardian_residence_number.value = f.father_residence_number.value;
        f.guardian_mobile_1.value = f.father_mobile_1.value;
        f.guardian_mobile_2.value = f.father_mobile_2.value;
        f.guardian_email.value = f.father_email.value;
        f.guardian_relation.value = "OTAC";
        f.father_as_guardian.checked == false;
        f.mother_as_guardian.checked == false;
        f.other_guardian.checked == false;

    }

    function addRequiredFieldInGuardian(){
        $('input[name="guardian_first_name"]').attr('required','required');
        $('input[name="guardian_last_name"]').attr('required','required');
        $('input[name="guardian_mobile_1"]').attr('required','required');
        $('input[name="guardian_relation"]').attr('required','required');
        $('input[name="guardian_address"]').attr('required','required');
    }

    function removeRequiredFieldInGuardian(){
        $('input[name="guardian_first_name"]').removeAttr('required');
        $('input[name="guardian_last_name"]').removeAttr('required');
        $('input[name="guardian_mobile_1"]').removeAttr('required');
        $('input[name="guardian_relation"]').removeAttr('required');
        $('input[name="guardian_address"]').removeAttr('required');
    }

    function activeGeneralInfo() {
        $('ul li').removeClass('active');
        $('#generalInfoTab').addClass('active');
        $('#generalInfo').addClass('active');
    }

    function activeAcademicInfo() {
        $('ul li').removeClass('active');
        $('#academicInfoTab').addClass('active');
    }

    function activeProfileImage() {
        $('ul li').removeClass('active');
        $('#profileImageTab').addClass('active');
    }

</script>