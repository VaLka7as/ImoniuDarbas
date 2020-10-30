@extends('layouts.app')

@section('content')
    @foreach($company as $data)
    <form class="p-5" method="post" action="{{ route('edit-company', $data->id) }}">
        @csrf
        <div class="form-group row">
            <label for="company_name" class="col-sm-2 col-form-label">Imonės pavadinimas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="company_leader" class="col-sm-2 col-form-label">Imonės direktorius</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_leader" value="{{$data->company_leader}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="company_description" class="col-sm-2 col-form-label">Imonės aprašymas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="company_description" value="{{$data->company_description}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Redaguoti</button>
            </div>
        </div>
    </form>
    @endforeach
@endsection
