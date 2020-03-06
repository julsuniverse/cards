@extends('emails.layout')

@section('content')
    <div class="content">
        <p><b>Новый заказ!</b></p>

        <p>Дата: {{ $order->created_at->format('d M, Y') }}</p>
        @if($order->layout)
            <p>{{ $order->layout->name_ru }}</p>
        @endif
        <span>Описание:</span>
        <p>{{ $order->description }}</p>
        <p>Цена: {{ $order->price }}</p>

        <a href="{{ route('dashboard.order.index') }}" class="email-btn">Детали заказа</a>
    </div>
@endsection
