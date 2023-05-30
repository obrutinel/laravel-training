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
        <div>
            <label for="image" class="form-label">Images</label>
            <input type="file" class="form-controzl @error('image') is-invalid @enderror" id="image" name="image" value="{{ $company->image }}">
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

@push('custom-css')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush

@push('custom-js')
    <script src="//unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="//unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="//unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.registerPlugin(FilePondPluginFileValidateType);

        const inputElement = document.querySelector('#image');

        const pond = FilePond.create(inputElement, {
            acceptedFileTypes: ['image/*'],
            server: {
                process: '{{ route('upload') }}',
                revert: '{{ route('revert') }}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>
@endpush