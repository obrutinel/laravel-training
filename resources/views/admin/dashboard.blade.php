@extends('admin.layout')

@section('content')
    Contenu dashboard

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

{{-- <a href="{{ route('candidate.create') }}" class="btn btn-primary">Nouveau candidat</a>
    <a href="#" class="btn btn-secondary">Nouvelle candidat</a> --}}
@endsection