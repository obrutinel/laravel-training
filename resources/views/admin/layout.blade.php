<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @stack('custom-css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('admin.partials.sidebar')

        <div id="app">
            <div class="container">
                <div class="mb-4 bg-body-tertiary rounded-3 well">
                    @yield('content')
                </div>
            </div>
        </div>

    </body>
    @stack('custom-js')
</html>