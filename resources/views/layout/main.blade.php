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
    <nav class="navbar navbar-expand-md navbar-light bg-light brown-navbar my-navbar">
        <a class="navbar-brand" href="{{ route('home') }}">{{ trans('menu.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto text-right">

                <li class="nav-item active">
                        <a class="nav-link " href="{{ route('change-locale') }}">
                            @if(App::getLocale() == 'en')
                                <span class="badge badge-danger mt-1">ru</span>
                            @elseif(App::getLocale() == 'ru')
                                <span class="badge badge-danger mt-1">en</span>
                            @endif
                        </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('menu.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#tarot">{{ trans('menu.tarot') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#lenorman">{{ trans('menu.lenorman') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#future">{{ trans('menu.future') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{ route('order.index') }}">{{ trans('menu.order') }}</a>
                </li>

                @if(Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('cabinet') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ trans('menu.profile') }}</a>
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

                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('dashboard.index') }}">Dashboard</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ trans('menu.login') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <main role="main" class="container main-content">
            @yield('pre-content')
        <div class="underlayer">
            @include('layout._errors')
            @yield('content')
        </div>
    </main>

    <!--<footer class="footer">
        <div class="container">
            <span class="text-muted">Серебрянная нить &copy; {{ date('Y') }}</span>
        </div>
    </footer>-->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
