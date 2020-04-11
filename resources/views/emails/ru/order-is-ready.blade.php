@extends('emails.layout')

@section('content')
    <div class="content">
        <p>Здравствуйте, {{ $user->name }} !</p>
        <p>
            <b>Ваш заказ готов</b>
        </p>

        <p>Вам открыт доступ к результату Вашего гадания на картах, выполненного согласно Вашему заказу, в Вашем личном кабинете на сайте.</p>

        <a href="{{ route('cabinet') }}" class="email-btn">Войти в кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')
    </div>
@endsection
