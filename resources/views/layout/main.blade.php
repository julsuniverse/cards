<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(app()->getLocale() == 'ru')
        <title>Гадание ТАРО</title>
        <meta name="description" content="Большой выбор карточных раскладов на разные темы: «Личная жизнь и любовные отношения», «Работа и карьера», «Поездки и путешествия», а также, «Расклады общего содержания». Прогноз будущего. Конфеденциально. " />
        <meta name="keywords" content="гадание на картах, гадание онлайн таро, гадание на картах таро онлайн, услуги таролога, консультация таролога" />
    @else
        <title>Order a Private card reading</title>
        <meta name="description" content=" variety of card lay-outs designed for card-reading in different spheres: Personal Relations & Love Matters, Work and Career, Travelling and Trips, and Miscellaneous life situations. " />
    @endif

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Ads: 672975950 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-672975950"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-672975950');
    </script>

    @stack('ads')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158757584-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-158757584-1');
    </script>
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
                                <span class="badge badge-danger mt-1">RU</span>
                            @elseif(App::getLocale() == 'ru')
                                <span class="badge badge-danger mt-1">EN</span>
                            @endif
                        </a>
                </li>

                {{--<li class="nav-item active nav-item-custom">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('menu.home') }}</a>
                </li>--}}
                {{--<li class="nav-item nav-item-custom">
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
                </li>--}}
                <li class="nav-item nav-item-custom">
                    <a class="nav-link font-weight-bold" href="https://www.youtube.com/channel/UC_DHLqSbI0pJah8HUiEfx5g" target="_blank">
                        {{ trans('menu.youtube') }}
                    </a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link font-weight-bold" href="{{ route('order.index') }}">{{ trans('menu.order') }}</a>
                </li>
                @if(App::getLocale() == 'ru')
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link font-weight-bold" href="{{ route('order.video') }}">{{ trans('menu.order-video') }}</a>
                    </li>
                @endif

                <li class="nav-item nav-item-custom">
                    <a class="nav-link font-weight-bold" href="{{ route('terms') }}">{{ trans('menu.terms') }}</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link font-weight-bold" href="{{ route('home') }}#oracle-tarot">{{ trans('menu.oracle-tarot') }}</a>
                </li>
                {{--<li class="nav-item nav-item-custom">
                    <a class="nav-link menu-runes" href="{{ route('home') }}#oracle-runes">{!! trans('menu.oracle-runes') !!}</a>
                </li>--}}

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

                <li class="nav-item nav-item-custom menu-email-icon">
                    <a href="mailto:info@light.space" data-toggle="tooltip" data-placement="bottom" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a href="tg://resolve?domain=SilverTBot" data-toggle="tooltip" data-placement="bottom" title="Telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a>
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

            <div class="mt-2">{!! __('footer.footer-text') !!}</div>

        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('js/disableCopy.js') }}"></script>
</body>
</html>
