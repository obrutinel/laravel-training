@extends('admin.layout')

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
        </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <th scope="row">{{ $company->id }}</th>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $companies->links() }}

@endsection