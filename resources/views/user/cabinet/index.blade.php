@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <h1>Добро пожаловать, {{ $user->name }}</h1>

            <h2>Информация о ваших заказах:</h2>

            <div class="list-group">
                @foreach($user->orders as $order)
                <a href="#" class="list-group-item list-group-item-action">
                    {{ $order->created_at->format('d-m-Y') }}
                    @if( $order->status == 'new')
                        <span class="badge badge-primary badge-pill">Ваш заказ в обработке. Когда он будет готов, на ваш email придет уведомление.</span>
                    @endif

                    @if($order->layout)
                        Выбранный расклад:
                        @if(app()->getLocale() == 'en')
                            <p>{{$order->layot->name}}</p>
                        @else
                            <p>{{$order->layot->name_ru}}</p>
                        @endif
                    @endif
                    <p><b>Описание:</b> </p>
                    <p>{{ $order->description }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection