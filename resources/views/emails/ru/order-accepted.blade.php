@extends('emails.layout')

@section('content')
    <div class="content">
        <p>Здравствуйте, {{ $user->name }}</p>

        <p>Ваш заказ принят и можно его оплатить: денежным переводом на карточку ПриватБанка:</p>

        <p>4149 6054 6641 4059</p>

        <p>Сумма платежа: <b>{{ $price }}</b></p>

        <p>Заказ будет выполнен в течение 1-2 суток после оплаты.</p>

        <p>Вы получите сообщение (Email) о том, что заказ готов.</p>

        <p>Вы сможете, в любое время, иметь доступ к Вашей личной консультации на картах, в Вашем личном кабинете на сайте:</p>
        <a href="{{ route('cabinet') }}" class="email-btn">Войти в кабинет</a>

        <p>Информация Вашего личного кабинета доступна на сайте только для Вас.</p>

        @include('emails.ru._footer')

    </div>
@endsection
