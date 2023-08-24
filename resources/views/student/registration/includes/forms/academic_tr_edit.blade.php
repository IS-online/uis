@foreach($academicInfos as $academicInfo)
<tr class="option_value">
        <td>
            <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
            </div>
        </td>
        <td>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Institucija
                    </th>
                    <td>
                        {!! Form::hidden('academic_info_id[]', $academicInfo->id, ["class" => "col-md-10"]) !!}
                        {!! Form::text('institution[]', $academicInfo->institution, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Board
                    </th>
                    <td>
                        {!! Form::text('board[]', $academicInfo->board, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Godina završetka
                    </th>
                    <td>
                        {!! Form::text('pass_year[]', $academicInfo->pass_year, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Slovna oznaka
                    </th>
                    <td>
                        {!! Form::text('symbol_no[]', $academicInfo->symbol_no, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Procenat
                    </th>
                    <td>
                        {!! Form::text('percentage[]', $academicInfo->percentage, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Divizija/Broj
                    </th>
                    <td>
                        {!! Form::text('division_grade[]', $academicInfo->division_grade, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Glavni predmet
                    </th>
                    <td>
                        {!! Form::text('major_subjects[]', $academicInfo->major_subjects, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Napomena
                    </th>
                    <td>
                        {!! Form::text('remark[]', $academicInfo->remark, ["class" => "col-md-10"]) !!}
                    </td>
                </tr>
            </table>
        </td>
        <td width="5%">
            <div class="btn-group">
                @ability('super-admin', 'student-delete-academic-info')
                <a href="{{ route('student.delete-academicInfo', ['id' => $academicInfo->id]) }}" class="btn btn-danger btn-minier bootbox-confirm align-right" >
                    <i class="ace-icon fa fa-trash-o bigger-130"></i> Izbriši
                </a>
                @endability
            </div>

        </td>
    </tr>
@endforeach


