@component('mail::message')

    <h1>Новый заказ!</h1>

    <p>Дата: {{ $order->created_at->format('d M, Y') }}</p>
    @if($order->layou)
    <p>{{ $order->layout->name_ru }}</p>
    @endif

    <p>{{ $order->description }}</p>
    <p>{{ $order->price }}</p>

    @component('mail::button', ['url' => route('dashboard.dashboard.order.index')])
        Детали заказа
    @endcomponent

@endcomponent