@extends('layout.main')

@section('content')
    <h3 class="text-left">Добро пожаловать, {{ $user->name }}</h3>
    <div class="">
        <nav>
            <div class="nav nav-tabs" id="profile-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Заказы</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Личная ифнормация</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="list-group mt-2">
                    @foreach($user->orders as $order)
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fa fa-calendar" aria-hidden="true"></i> {{ $order->created_at->format('d-m-Y') }}
                            @if( $order->status == 'new')
                                <span class="badge badge-primary badge-pill">В обработке</span>
                                <p class="font-weight-light">Когда заказ будет готов, на ваш email придет уведомление.</p>
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
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                @include('user.cabinet.user-info')
            </div>
        </div>
    </div>

@endsection