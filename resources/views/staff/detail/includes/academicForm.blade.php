@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Unos Akademskih Informacija za Uposlenika</h2>
    <form action="{{ route('staff.academic.store', ['id' => $staff->id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="institucija">Institucija:</label>
            <input type="text" class="form-control" id="institucija" name="institucija" required>
        </div>
        <div class="form-group">
            <label for="tjelo">Tjelo:</label>
            <input type="text" class="form-control" id="tjelo" name="tjelo" required>
        </div>
        <div class="form-group">
            <label for="zvanje">Zvanje:</label>
            <input type="text" class="form-control" id="zvanje" name="zvanje" required>
        </div>
        <div class="form-group">
            <label for="naziv_rada">Naziv Rada:</label>
            <input type="text" class="form-control" id="naziv_rada" name="naziv_rada" required>
        </div>
        <div class="form-group">
            <label for="oblast">Oblast:</label>
            <input type="text" class="form-control" id="oblast" name="oblast" required>
        </div>
        <div class="form-group">
            <label for="issn">ISSN:</label>
            <input type="text" class="form-control" id="issn" name="issn">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn">
        </div>
        <div class="form-group">
            <label for="doi">DOI:</label>
            <input type="text" class="form-control" id="doi" name="doi">
        </div>
        <div class="form-group">
            <label for="država">Država:</label>
            <input type="text" class="form-control" id="država" name="država" required>
        </div>
        <div class="form-group">
            <label for="mjesto">Mjesto:</label>
            <input type="text" class="form-control" id="mjesto" name="mjesto" required>
        </div>
        <div class="form-group">
            <label for="datum">Datum:</label>
            <input type="date" class="form-control" id="datum" name="datum" required>
        </div>
        <div class="form-group">
            <label for="ocjena">Ocjena:</label>
            <input type="number" class="form-control" id="ocjena" name="ocjena">
        </div>
        <div class="form-group">
            <label for="ects">ECTS:</label>
            <input type="number" class="form-control" id="ects" name="ects">
        </div>
        <div class="form-group">
            <label for="recenzija">Recenzija:</label>
            <input type="checkbox" class="form-control" id="recenzija" name="recenzija">
        </div>
        <div class="form-group">
            <label for="publikacija">Publikacija:</label>
            <input type="text" class="form-control" id="publikacija" name="publikacija" required>
        </div>
        <button type="submit" class="btn btn-primary">Sačuvaj</button>
    </form>
</div>
@endsection
