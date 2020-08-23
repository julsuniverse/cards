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
                        <b>{{ __('order.btn-order-instructions') }}</b>
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body border border-danger">
                        {!! __('order.order-instructions') !!}
                    </div>
                </div>
            </div>
            <div class="card card-content mt-1 pl-0 pr-0">
                <div class="card-header">

                    <h4 class="text-center mb-1">{{ __('order.title') }}</h4>
                    <div class="row">
                        <div class="col-12 text-center">
                            {!! __('order.text-before-btns') !!}
                        </div>
                    </div>
                    <div class="row mt-2 text-center">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <a href="{{ route('order.text-order') }}" class="btn btn-danger mb-2 mb-lg-0"><b>{{ __('order.btn-order-simple') }}</b></a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <a href="{{ route('order.select-order') }}" class="btn btn-danger"><b>{{ __('order.btn-order-select') }}</b></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2 mt-lg-2">
                            {!! __('order.adult') !!}
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div>
                        {!! __('order.part1') !!}
                    </div>

                    <div class="text-lg-left text-center">
                        <a href="{{ route('order.text-order') }}" class="btn btn-danger mb-2"><b>{{ __('order.btn-order-simple') }}</b></a>
                    </div>

                    <div>
                        {!! __('order.part2') !!}
                    </div>

                    <div class="text-lg-left text-center">
                        <a href="{{ route('order.select-order') }}" class="btn btn-danger"><b>{{ __('order.btn-order-select') }}</b></a>
                    </div>

                    <img src="{{ asset('images/cards-4.jpg') }}" style="max-width: 100%; margin-top: 20px;"/>
                </div>
            </div>
        </div>
    </div>

@endsection
