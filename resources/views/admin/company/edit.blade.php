@extends('admin.layout')

@section('content')

    <h1>Edition d'une companie</h1>

    <form method="POST" action="{{ route('admin.company.update', $company) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Raison sociale</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   id="name"
                   name="name"
                   value="{{ $company->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $company->phone }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="website" class="form-label">Site internet</label>
            <input type="url" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ $company->website }}">
            @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <hr />


        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>

    </form>
@endsection