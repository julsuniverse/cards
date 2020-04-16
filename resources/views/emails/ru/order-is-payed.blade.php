@extends('emails.layout')

@section('content')
    <div class="content">
        <p><b>Здравствуйте, {{ $user->name }}!</b></p>

        <p>Спасибо, Ваша оплата получена.</p>

        <p>Заказ будет выполнен в течение 1-2 суток.</p>

        <p>Вы получите сообщение (Email) о том, что заказ готов.</p>

        <p>Результат гадания будет доступен в Вашем личном кабинете на сайте, в любое время.</p>

        <a href="https://tarot-light.space/cabinet" class="email-btn">Войти в личный кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
