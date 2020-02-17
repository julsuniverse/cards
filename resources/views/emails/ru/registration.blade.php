@extends('emails.layout')

@section('content')
    <div class="content">
        <h1>Здравствуйте, {{ $user->name }}</h1>

        <p>Спасибо, что обратились ко мне за консультацией.</p>
        <p>В ближайшее время я ознакомлюсь с Вашим заказом и Вы получите сообщение о его готовности. </p>

        <p>Данные для входа в Ваш личный кабинет на сайте <br> http://tarot-light.space/ </p>
        <ul>
            <li>
                <b>Логин:</b> {{ $user->email }}
            </li>
            <li>
                <b>Пароль:</b> {{ $password }}
            </li>
        </ul>

        <a href="{{ route('cabinet') }}" class="email-btn">Войти в кабинет</a>

        <p>Информация Вашей личной страницы доступна на сайте только для Вас.</p>

        <p>
            <em>С уважением, <br>
            Светлана Грабовская
            </em>
        </p>
        <a href="http://tarot-light.space">http://tarot-light.space</a>
    </div>
@endsection
