@component('mail::message')

<h1>Your order is ready! </h1>

<p>Login to your personal account to pay.</p>
<p>After payment your fortunetelling will appear in your personal account.</p>


@component('mail::button', ['url' => route('cabinet')])
    Login and pay
@endcomponent

@endcomponent