@extends('layout.main')

@push('scripts')
    <!-- Event snippet for Просмотр страницы: заказать консультацию conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-672975950/xoiQCLXDgsQBEM6Y88AC'});
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="">
            <div class="mt-1">
                <p class="text-center">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <b>{{ __('order-video.btn-order-instructions') }}</b>
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body border border-danger">
                        {!! __('order-video.order-instructions') !!}
                    </div>
                </div>
            </div>
            <div class="card card-content mt-1">
                <div class="card-header">

                    <h1 class="text-center mb-1">{{ __('order-video.title') }}</h1>
                    <div class="row">
                        <div class="col-12 text-center">
                            {!! __('order-video.text-before-btns') !!}
                        </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <a href="{{ route('order.video-order') }}" class="btn btn-danger mb-2"><b>{{ __('order-video.btn-order-simple') }}</b></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2 mt-lg-2">
                            {!! __('order-video.adult') !!}
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div>
                        {!! __('order-video.part1') !!}
                    </div>

                    <div class="text-lg-left text-center">
                        <a href="{{ route('order.video-order') }}" class="btn btn-danger mb-2"><b>{{ __('order-video.btn-order-simple') }}</b></a>
                    </div>

                    <img src="{{ asset('images/cards-4.jpg') }}" style="max-width: 100%; margin-top: 20px;"/>
                </div>
            </div>
        </div>
    </div>

@endsection
