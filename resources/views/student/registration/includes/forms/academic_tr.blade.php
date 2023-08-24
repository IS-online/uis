<tr class="option_value">
    <td>
        <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
        </div>
    </td>
    <td>
        <table id="responsive" class="table table-striped table-bordered table-hover">
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Institucija
                </th>
                <td>
                    {!! Form::text('institution[]', null, ["class" => "col-md-10"]) !!}
                    {{--["class" => "col-xs-10 col-sm-11"]--}}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Mjesto
                </th>
                <td>
                    {!! Form::text('board[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Godina završetka 
                </th>
                <td>
                    {!! Form::text('pass_year[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Slovna oznaka
                </th>
                <td>
                    {!! Form::text('symbol_no[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Opšti uspjeh - ocjena
                </th>
                <td>
                    {!! Form::text('percentage[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Broj diplome
                </th>
                <td>
                    {!! Form::text('division_grade[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Glavni predmet
                </th>
                <td>
                    {!! Form::text('major_subjects[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
            <tr>
                <th class="align-right" style="border: none !important; background: none !important;">
                    Napomena
                </th>
                <td>
                    {!! Form::text('remark[]', null, ["class" => "col-md-10"]) !!}
                </td>
            </tr>
        </table>
    </td>
    <td width="5%">
        <div class="btn-group">
            <button type="button" class="btn btn-xs btn-danger" onclick="$(this).closest('tr').remove();">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
        </div>

    </td>
</tr>

