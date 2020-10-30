@extends('layouts.app')

@section('content')
    <form class="p-5" method="post" action="{{ route('add-company') }}">
        @csrf
        <div class="form-group row">
            <label for="company_name" class="col-sm-2 col-form-label">Imonės pavadinimas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="company_leader" class="col-sm-2 col-form-label">Imonės direktorius</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_leader">
            </div>
        </div>
        <div class="form-group row">
            <label for="company_description" class="col-sm-2 col-form-label">Imonės aprašymas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_description">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sukurti</button>
            </div>
        </div>
    </form>
@endsection
