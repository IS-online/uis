<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Lista dokumenata</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Evidencije osoblja u tabeli. Filtrirajte listu koristeći polje za pretragu po želji.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
            <thead>
            <tr >
                <th width="5%">R.B.</th>
                <th>Dokument sa vezom</th>
                <th>Opis</th>
            </tr>
            </thead>
            <tbody>
            @if (isset($data['document']) && $data['document']->count() > 0)
                @php($i=1)
                @foreach($data['document'] as $document)
                    <tr>
                        <td>{{ $i }}</td>
                        <td class="text-left">
                            <a href="{{ asset('documents'.DIRECTORY_SEPARATOR.'staff'.DIRECTORY_SEPARATOR.ViewHelper::getStaffById( $document->member_id ).DIRECTORY_SEPARATOR.$document->file) }}" target="_blank">
                                <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;{{ $document->title }}
                            </a>
                        </td>
                        <td class="text-left">{{ $document->description }}</td>
                    </tr>
                    @php($i++)
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="align-left">Podaci o dokumentima nisu pronađeni.</td>
                </tr>
            @endif
            </tbody>
        </table>
        </div>
    </div>

</div><!-- /.row -->