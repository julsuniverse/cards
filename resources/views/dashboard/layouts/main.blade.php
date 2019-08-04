<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light brown-navbar fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">{{ trans('menu.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto text-right">

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('menu.home') }}</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('layout.index') }}">Расклады</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ trans('menu.login') }}</a>
                </li>

            </ul>
        </div>
    </nav>

    <main role="main" class="container main-content">
        <div class="underlayer">
            @include('layout._errors')
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
