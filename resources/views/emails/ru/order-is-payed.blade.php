@component('mail::message')

    <h1>Ваша оплата принята! </h1>

    <p>Ваше гадание доступно в личном кабинете.</p>

    @component('mail::button', ['url' => route('cabinet.show-answer', $order)])
        Посмотреть результат гадания
    @endcomponent

@endcomponent