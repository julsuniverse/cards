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
        <a class="navbar-brand" href="#">Серебряная нить</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tarot">Таро</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#lenorman">Ленорман</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#future">Прогноз будущего</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{ route('order.index') }}">Заказать консультацию</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container main-content">
        @yield('content')
    </main>

    <!--<footer class="footer">
        <div class="container">
            <span class="text-muted">Серебрянная нить &copy; {{ date('Y') }}</span>
        </div>
    </footer>-->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
