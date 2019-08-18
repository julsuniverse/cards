@component('mail::message')

    <h1>Ваш заказ принят!</h1>

    <p>Как только гадание будет выполнено, вам придет уведомление на email.</p>
    <p>После этого будет необходимо оплатить заказ. После оплаты ваше гадание будет доступно в личном кабинете.</p>

    <p>Данные для входа:</p>
    <ul>
        <li>
            <b>Логин:</b> {{ $user->email }}
        </li>
        <li>
            <b>Пароль:</b> {{ $password }}
        </li>
    </ul>

    @component('mail::button', ['url' => route('cabinet')])
        Войти в кабинет
    @endcomponent

@endcomponent