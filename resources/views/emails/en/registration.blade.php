@extends('emails.en.layout')

@section('content')
    <div class="content">

        <h1>Your order have been received!</h1>

        <p>Dear {{ $user->name }}</p>
        <p>Thank you for the order</p>

        <p>Your cards-reading <b>will be ready</b> within 48 hours, <b>and you will get an Email</b> confirming that your order is ready and can be paid and acquired.</p>

        <p>Credentials for your account:</p>
        <ul>
            <li>
                <b>Login:</b> {{ $user->email }}
            </li>
            <li>
                <b>Password:</b> {{ $password }}
            </li>
        </ul>


        <a href="{{ route('cabinet') }}" class="email-btn">Enter to your account</a>

        <p>The payment can be made by money transfer to my bank account number.</p>

        <p>After the payment, you get an access to your cards-reading, on your personal page of the website.</p>

        <p>The information of your personal page is <b>confidential</b>. It can be accessed only by the person who has the password.</p>

        <p>
            Kind regards, <br>
            Svetlana Grabovskaya
        </p>
        <a href="http://tarot-light.space">http://tarot-light.space</a>

    </div>
@endsection
