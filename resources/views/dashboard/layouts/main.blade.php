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
                    <a class="nav-link" href="{{ route('dashboard.order.index') }}">Заказы</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard.layout.index') }}">Расклады</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard.theme.index') }}">Темы</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard.user.index') }}">Пользователи</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard.translation.index') }}">Переводы</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Оракул
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('dashboard.daily-card.index', ['type' => 'tarot']) }}">Таро</a>
                        <a class="dropdown-item" href="{{ route('dashboard.daily-card.index', ['type' => 'lenormand']) }}">Ленорман</a>
                        <a class="dropdown-item" href="{{ route('dashboard.daily-card.index', ['type' => 'runes']) }}">Руны</a>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ trans('menu.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                
            </ul>
        </div>
    </nav>

    <main role="main" class="container main-content" id="app">
        <div class="underlayer">
            @include('layout._errors')
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
