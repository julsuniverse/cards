@extends('emails.layout')

@section('content')
    <div class="content">
        <p>Здравствуйте, {{ $user->name }}! </p>

        <p>Спасибо, Ваша оплата получена.</p>
        <p>Заказ будет выполнен в течение 1-2 суток.</p>

        <p>Вы получите сообщение (Email) о том, что заказ готов.</p>

        <p>Результат гадания будет доступен в Вашем личном кабинете на сайте, в любое время.</p>

        <a href="https://tarot-light.space/cabinet" class="email-btn">Войти в кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
