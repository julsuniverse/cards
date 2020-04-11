@extends('emails.layout')

@section('content')
    <div class="content">
        <p><b>Здравствуйте, {{ $user->name }}</b></p>

        <p>Спасибо, что обратились ко мне для гадания на картах.</p>
        <p>В ближайшее время, я ознакомлюсь с Вашим заказом.</p>
        <p>Вы получите сообщение о том, что Ваш заказ принят и ожидает оплаты.</p>

        <p>Данные для входа в Ваш личный кабинет на сайте <br> http://tarot-light.space/ </p>
        <ul>
            <li>
                <b>Логин:</b> {{ $user->email }}
            </li>
            <li>
                <b>Пароль:</b> {{ $password }}
            </li>
        </ul>

        <a href="{{ route('cabinet') }}" class="email-btn">Войти в Ваш личный кабинет</a>

        <p>Информация Вашего личного кабинета на сайте доступна только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
