@component('mail::message')

<h1>Ваш заказ готов! </h1>

<p>Перейдите в ваш личный кабинет для оплаты.</p>
<p>После того, как произойдет оплата ваше гадание появится в личном кабинете.</p>

@component('mail::button', ['url' => route('cabinet')])
    Войти в кабинет и оплатить
@endcomponent

@endcomponent