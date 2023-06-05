@extends('admin.layout')

@section('content')

    <a href="{{ route('admin.companies.vue.create') }}" class="btn btn-primary mb-4">
        Ajouter une companie
    </a>

    <companies-list></companies-list>

@endsection