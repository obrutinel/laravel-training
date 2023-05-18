<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">NAVBAR</a>

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.companies') }}">Companies Blade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.companies.vue') }}">Companies VueJs</a>
            </li>
        </ul>

    </div>
</nav>