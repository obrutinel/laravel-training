@extends('admin.layout')

@section('title', 'Liste des entreprises')

@section('content')

    @include('admin.partials.flash')

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
            <th scope="col" class="text-center">Actif</th>
            <th scope="col" class="text-center">Mail sent</th>
            <th scope="col" class="text-end">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <th scope="row">{{ $company->id }}</th>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone }}</td>
                    <td class="text-center">
                        @if($company->enable)
                            <i class="fa-solid fa-circle-check text-success"></i>
                        @else
                            <i class="fa-solid fa-xmark text-danger"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($company->mail_send_at)
                            {{ $company->mail_send_at->diffForHumans() }}
                        @else
                            <i class="fa-solid fa-xmark text-danger"></i>
                        @endif
                    </td>
                    <td class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.company.edit', $company->id) }}" class="btn btn-primary">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="{{ route('admin.company.edit', $company->id) }}" class="btn btn-warning">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    @include('admin.company.modals.delete')



@endsection

@push('custom-js')
<script>

</script>
@endpush

