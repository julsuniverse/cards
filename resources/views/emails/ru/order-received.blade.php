@extends('emails.layout')

@section('content')
    <div class="content">
        <p><b>Здравствуйте, {{ $user->name }}!</b></p>

        <p>Спасибо, что обратились ко мне для гадания на картах.</p>

        <p>
            <b>Ваш заказ получен.</b>
        </p>

        <p>В ближайшее время, я ознакомлюсь с Вашим заказом.</p>

        <p>Вы получите сообщение о том, что Ваш заказ принят и ожидает оплаты.</p>

        <a href="https://tarot-light.space/cabinet" class="email-btn">Войти в личный кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
