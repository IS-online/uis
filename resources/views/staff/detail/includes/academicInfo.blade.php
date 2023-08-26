<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;Akademske informacije</h4>
        <div class="table-responsive">
            <!-- Dugme za dodavanje nove akademske informacije  -->
            @if(isset($staff))
            <a href="{{ route('staff.academic.form', ['staff_id' => $staff->id]) }}" class="btn btn-primary btn-minier">
                <i class="ace-icon fa fa-plus bigger-130"></i> Dodaj
            </a>
        @else
            <p>Staff not found.</p>
        @endif
        
            <table id="main-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr style="background-color: #438EB9; color: white;">
                        <th>Mjesto i Datum</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Provera da li postoje akademske informacije -->
                    @if (isset($academicInfos) && count($academicInfos) > 0)
                        @foreach($academicInfos as $academicInfo)
                            <tr>
                                <td>
                                    {{ $academicInfo->mjesto }} , {{ $academicInfo->datum }}
                                </td>
                                <td>
                                    <a href="{{ route('staff.delete-academicInfo', ['id' => $academicInfo->id]) }}" class="btn btn-danger btn-minier">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i> Izbriši
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <td>Institucija</td>
                                            <td>{{ $academicInfo->institucija }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tjelo</td>
                                            <td>{{ $academicInfo->tjelo }}</td>
                                        </tr>
                                        <tr>
                                            <td>Zvanje</td>
                                            <td>{{ $academicInfo->zvanje }}</td>
                                        </tr>
                                        <tr>
                                            <td>Naziv Rada</td>
                                            <td>{{ $academicInfo->naziv_rada }}</td>
                                        </tr>
                                        <tr>
                                            <td>Oblast</td>
                                            <td>{{ $academicInfo->oblast }}</td>
                                        </tr>
                                        <tr>
                                            <td>ISSN</td>
                                            <td>{{ $academicInfo->issn }}</td>
                                        </tr>
                                        <tr>
                                            <td>ISBN</td>
                                            <td>{{ $academicInfo->isbn }}</td>
                                        </tr>
                                        <tr>
                                            <td>DOI</td>
                                            <td>{{ $academicInfo->doi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Država</td>
                                            <td>{{ $academicInfo->država }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ocjena</td>
                                            <td>{{ $academicInfo->ocjena }}</td>
                                        </tr>
                                        <tr>
                                            <td>ECTS</td>
                                            <td>{{ $academicInfo->ects }}</td>
                                        </tr>
                                        <tr>
                                            <td>Recenzija</td>
                                            <td>{{ $academicInfo->recenzija }}</td>
                                        </tr>
                                        <tr>
                                            <td>Publikacija</td>
                                            <td>{{ $academicInfo->publikacija }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">Nema dostupnih akademskih informacija</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div><!-- /.row -->
