@extends('emails.layout')

@section('content')
    <div class="content">

        <h1>Your order is ready!</h1>

        <p>Dear {{ $user->name }}</p>

        <p><b>Your order is ready</b> and can be paid and acquired.</p>

        <p>The payment can be made by money transfer to my bank account number:</p>

        <p>
            Account number: <b>4149 6054 6641 4059</b><br>
            Bank: PRIVATBANK
        </p>

        <p>After the payment is received, you get an access to your cards-reading, on your personal page of the website.</p>

        <a href="{{ route('cabinet') }}" class="email-btn">My account</a>

        <p>The information of your personal page is <b>confidential</b>. It can be accessed only by the person who has the password.</p>

        <p>
            Kind regards, <br>
            Svetlana Grabovskaya
        </p>

        <p>
            PRIVATE CARDS READING <br>
            Esoteric services for leisure time
        </p>
    </div>
@endsection