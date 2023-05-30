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
                        <a href="{{ route('admin.company.mail', $company->id) }}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#mailModal">
                            <i class="fa-regular fa-envelope"></i>
                        </a>
                        <a href="{{ route('admin.company.destroy', $company->id) }}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-regular fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $companies->links() }}

    @include('admin.company.modals.mail')
    @include('admin.company.modals.delete')

@endsection

@push('custom-js')
<script type="module">

    $(document).ready(function() {

        // DELETE MODAL
        $('#deleteModal').on('show.bs.modal', function (event) {
            let url = $(event.relatedTarget).attr('href');
            $(this).find('form').attr('action', url);
        });

        // MAIL MODAL
        $('#mailModal').on('show.bs.modal', function (event) {
            let url = $(event.relatedTarget).attr('href');
            $(this).find('form').attr('action', url);
        })

    });

</script>
@endpush

