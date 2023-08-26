<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Akademske informacije</h4>
        <!-- Akademske informacije -->
        <div class="row">
            <div class="col-md-4">
                <label for="institucija">Institucija:</label>
                <div class="form-group">
                    {{ $academicInfo->institucija ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="tjelo">Tjelo:</label>
                <div class="form-group">
                    {{ $academicInfo->tjelo ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="zvanje">Zvanje:</label>
                <div class="form-group">
                    {{ $academicInfo->zvanje ?? '' }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="naziv_rada">Naziv Rada:</label>
                <div class="form-group">
                    {{ $academicInfo->naziv_rada ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="oblast">Oblast:</label>
                <div class="form-group">
                    {{ $academicInfo->oblast ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="issn">ISSN:</label>
                <div class="form-group">
                    {{ $academicInfo->issn ?? '' }}
                </div>
            </div>
        </div>

        <!-- Dodatne informacije -->
        <div class="row">
            <div class="col-md-4">
                <label for="isbn">ISBN:</label>
                <div class="form-group">
                    {{ $academicInfo->isbn ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="doi">DOI:</label>
                <div class="form-group">
                    {{ $academicInfo->doi ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="država">Država:</label>
                <div class="form-group">
                    {{ $academicInfo->država ?? '' }}
                </div>
            </div>
        </div>

        <!-- još informacija -->
        <div class="row">
            <div class="col-md-4">
                <label for="mjesto">Mjesto:</label>
                <div class="form-group">
                    {{ $academicInfo->mjesto ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="datum">Datum:</label>
                <div class="form-group">
                    {{ $academicInfo->datum ?? '' }}
                </div>
            </div>

            <div class="col-md-4">
                <label for="ocjena">Ocjena:</label>
                <div class="form-group">
                    {{ $academicInfo->ocjena ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>
