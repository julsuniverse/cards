@extends('layout.main')

@push('scripts')
    <!-- Event snippet for Просмотр страницы: заказать консультацию conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-672975950/xoiQCLXDgsQBEM6Y88AC'});
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mt-1 text-center">
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <b>{{ __('order.btn-order-instructions') }}</b>
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body border border-danger">
                        {!! __('order.order-instructions') !!}
                    </div>
                </div>
            </div>
            <div class="card card-content mt-1">
                <div class="card-header">

                    <h4 class="text-center">{{ __('order.title') }}</h4>
                    <div class="row mt-1 text-center">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <a href="{{ route('order.text-order') }}" class="btn btn-outline-danger mb-2"><b>{{ __('order.btn-order-simple') }}</b></a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <a href="{{ route('order.select-order') }}" class="btn btn-outline-danger"><b>{{ __('order.btn-order-select') }}</b></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            {!! __('order.adult') !!}
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div>
                        {!! __('order.part1') !!}
                    </div>

                    <a href="{{ route('order.text-order') }}" class="btn btn-outline-danger mb-2"><b>{{ __('order.btn-order-simple') }}</b></a>

                    <div>
                        {!! __('order.part2') !!}
                    </div>

                    <a href="{{ route('order.select-order') }}" class="btn btn-outline-danger"><b>{{ __('order.btn-order-select') }}</b></a>

                    <img src="{{ asset('images/cards-4.jpg') }}" style="max-width: 100%; margin-top: 20px;"/>
                </div>
            </div>
        </div>
    </div>

@endsection
