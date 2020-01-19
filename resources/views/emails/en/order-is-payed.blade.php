@extends('emails.layout')

@section('content')
    <div class="content">

        <h1>Your payment is received!</h1>

        <p>Dear {{ $user->name }}</p>

        <p>Your payment is received. Thank you.</p>

        <p>You can assess your card reading, any time, on your personal page of the website.</p>

        <a href="{{ route('cabinet.show-answer', $order) }}" class="email-btn">Go to card-reading result</a>

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