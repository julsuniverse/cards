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
    <nav class="navbar navbar-expand-xl navbar-light bg-light brown-navbar my-navbar fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">{{ trans('menu.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto text-center">

                <li class="nav-item active nav-item-custom">
                        <a class="nav-link " href="{{ route('change-locale') }}">
                            @if(App::getLocale() == 'en')
                                <span class="badge badge-danger mt-1">ru</span>
                            @elseif(App::getLocale() == 'ru')
                                <span class="badge badge-danger mt-1">en</span>
                            @endif
                        </a>
                </li>

                <li class="nav-item active nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('menu.home') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}#tarot">{{ trans('menu.tarot') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}#lenorman">{{ trans('menu.lenorman') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}#consultation">{{ trans('menu.consultation') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}#future">{{ trans('menu.future') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('terms') }}">{{ trans('menu.terms') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link font-weight-bold" href="{{ route('order.index') }}">{{ trans('menu.order') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}#oracle-tarot">{{ trans('menu.oracle-tarot') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link " href="{{ route('home') }}#oracle-runes">{!! trans('menu.oracle-runes') !!}</a>
                </li>

                @if(Auth::user())
                    <li class="nav-item active nav-item-custom ">
                        <a class="nav-link" href="{{ route('cabinet') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ trans('menu.profile') }}</a>
                    </li>
                    <li class="nav-item active nav-item-custom">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                           data-toggle="tooltip" data-placement="bottom" title="{{ trans('menu.logout') }}"
                        >
                            <i class="fa fa-sign-out" ></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    @if(Auth::user()->role == 'admin')
                        <li class="nav-item nav-item-custom">
                            <a class="nav-link font-weight-bold" href="{{ route('dashboard.index') }}"><i class="fa fa-cog"></i></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item active nav-item-custom">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ trans('menu.login') }}</a>
                    </li>
                @endif

                <li class="nav-item nav-item-custom mr-1">
                    <a href="mailto:info@light.space" data-toggle="tooltip" data-placement="bottom" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a href="tg://resolve?domain=SilverTBot" data-toggle="tooltip" data-placement="bottom" title="Email"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container main-content" id="app">
            @yield('pre-content')
        <div class="underlayer">
            @include('layout._errors')
            @yield('content')
        </div>
    </main>

    <footer class="footer">
        <div class="container text-center">
            <div>
                <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:info@light.space">info@tarot-light.space</a>
                </p>
                <p>
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                    <a href="tg://resolve?domain=SilverTBot">@SilverTBot</a>
                </p>
            </div>
            <p><span class="text-muted">{{ __('menu.name') }} &copy; {{ date('Y') }}</span></p>

            <img class="fondy-logo" src="{{ asset('images/master_visa_fondy.png') }}" style="">

        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
