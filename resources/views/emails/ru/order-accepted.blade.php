@extends('emails.layout')

@section('content')
    <div class="content">

        <h1>Ваш заказ принят!</h1>

        <p>Здравствуйте, {{ $user->name }}</p>

        <p>Вы заказали консультацию на картах.</p>

        <p>В течение <b>48 часов</b>, Вы получите сообщение о том, что заказ готов и можно его оплатить денежным переводом на карточку ПриватБанка.</p>

        <p>После оплаты, Вам откроется доступ к Вашей личной консультации на картах, выполненной согласно Вашему заказу, в личном кабинете на сайте.</p>

        <p>Вы можете отслеживать статус Вашего заказа в личном кабинете.</p>
        <a href="{{ route('cabinet') }}" class="email-btn">Войти в кабинет</a>

        <p>Информация Вашей личной страницы доступна на сайте только для Вас.</p>

        <p>
            <em>С уважением, <br>
                Светлана Грабовская <br>
                Таролог
            </em>
        </p>
        <a href="http://tarot-light.space">http://tarot-light.space</a>

    </div>
@endsection
