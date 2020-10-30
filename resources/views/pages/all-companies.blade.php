@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Įmonės pavadinimas</th>
            <th scope="col">Įmonės direktorius</th>
            <th scope="col">Įmonės aprašymas</th>
            <th scope="col">Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{ $company->company_name }}</th>
                <td>{{ $company->company_leader }}</td>
                <td>{{ $company->company_description }}</td>
                <td>
                    <a href="{{ url('/redaguoti-imone/' . $company->id )}}">Redaguoti</a>
                    <a href="{{ url('/istrinti-imone/' . $company->id )}}">Ištrinti</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
