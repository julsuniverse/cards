@extends('emails.layout')

@section('content')
    <div class="content">
        <h1>Ваша оплата принята!</h1>

        <p>Уважаемая (ый) {{ $user->name }}! </p>

        <p>Спасибо, Ваша оплата получена.</p>
        <p>Ваше гадание доступно в личном кабинете.</p>

        <a href="{{ route('cabinet.show-answer', $order) }}" class="email-btn">Посмотреть результат гадания</a>

        <p>На Вашей личной странице, Вы можете, в любое время, иметь доступ к письменной консультации на картах, выполненной согласно Вашего персонального заказа.</p>

        <p>Информация Вашей личной страницы доступна на сайте только для Вас.</p>

        <p>
            <em>С уважением, <br>
                Светлана Грабовская
            </em>
        </p>

        <p>
            Консультации (гадание) на картах Таро и Ленорман <br>
            Предоставление эзотерических услуг в сфере досуга
        </p>
    </div>
@endsection