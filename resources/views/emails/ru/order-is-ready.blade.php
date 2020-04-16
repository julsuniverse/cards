@extends('emails.layout')

@section('content')
    <div class="content">
        <p>Здравствуйте, {{ $user->name }}!</p>
        <p>
            <b>Ваш заказ готов.</b>
        </p>

        <p>Результат гадания доступен в Вашем личном кабинете на сайте, в любое время.</p>

        <a href="https://tarot-light.space/cabinet" class="email-btn">Войти в личный кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
