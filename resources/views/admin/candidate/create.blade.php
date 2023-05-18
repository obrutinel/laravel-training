@extends('admin.layout')

@section('content')

    <h1>Création d'un candidat</h1>

    <form method="POST" action="{{ route('admin.candidate.store') }}">
        @csrf

        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                   id="lastname"
                   name="lastname"
                   value="{{ old('lastname') }}">
            @error('lastname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') }}">
            @error('lastname')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <hr />
        <div class="mb-3">
            <label for="jobtitle" class="form-label">Job</label>
            <input type="text" class="form-control @error('jobtitle') is-invalid @enderror" id="jobtitle" name="jobtitle" value="{{ old('jobtitle') }}">
             @error('jobtitle')
                <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salaire</label>
            <input type="number" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{ old('salary') }}">
            @error('salary')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <hr />
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>

    </form>

@endsection