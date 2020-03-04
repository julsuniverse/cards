@extends('layout.main')

@section('content')
    <h3 class="text-left">{{ __('cabinet.title') }} {{ $user->name }}</h3>
    <div class="">
        <nav>
            <div class="nav nav-tabs" id="profile-tab" role="tablist">
                <a class="nav-item nav-link @if(!session('tab')) active @endif" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('cabinet.tab-order-name') }}</a>
                <a class="nav-item nav-link  @if(session('tab') == 'info') active @endif" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('cabinet.tab-info-name') }}</a>
                <a class="nav-item nav-link @if(session('tab') == 'password') active @endif" id="nav-profile-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('cabinet.tab-password-name') }}</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade @if(!session('tab') ) show active @endif" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="list-group mt-2">
                    @foreach($orders as $order)
                        <div class="list-group-item list-group-item-action mb-1">
                            <i class="fa fa-calendar" aria-hidden="true"></i> {{ $order->created_at->format('d-m-Y') }}
                            @if( $order->status == 'new')
                                <span class="badge badge-primary badge-pill">{{ __('order-statuses.status.new') }}</span>
                            @elseif($order->status == 'accepted')
                                <span class="badge badge-primary badge-pill">{{ __('order-statuses.status.accepted') }}</span>
                            @elseif($order->status == 'processing')
                                <span class="badge badge-warning badge-pill">{{ __('order-statuses.status.processing') }}</span>
                            @elseif($order->status == 'ready')
                                <span class="badge badge-info badge-pill">{{ __('order-statuses.status.ready') }}</span>
                            @elseif($order->status == 'payed')
                                <span class="badge badge-success badge-pill">{{ __('order-statuses.status.payed') }}</span>
                            @endif

                            <div>
                                @if($order->layout)
                                    {{ __('cabinet.order-layout') }}
                                    @if(app()->getLocale() == 'en')
                                        <p>{{$order->layout->name}}</p>
                                    @else
                                        <p>{{$order->layout->name_ru}}</p>
                                    @endif
                                @endif
                            </div>

                            <p><b>{{ __('cabinet.order-description') }}</b> </p>
                            <p>{{ $order->description }}</p>

                            @if($order->status == 'payed')
                                <a href="{{ route('cabinet.show-answer', $order->id) }}" class="btn btn-danger mt-3">
                                    {{ __('order.order.show') }}
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade  @if(session('tab') == 'info') active show @endif" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                @include('user.cabinet.user-info')
            </div>
            {{ isset($tab) ? $tab : '' }}
            <div class="tab-pane fade @if(session('tab') == 'password') active show @endif" id="nav-password" role="tabpanel" aria-labelledby="nav-profile-tab">
                @include('user.cabinet.change-password')
            </div>
        </div>
    </div>

@endsection
