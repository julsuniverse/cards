@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-content">
                <div class="card-header">
                    <h4 class="text-center">{{ __('order.title') }}</h4>
                    <div class="row mt-1 text-center">
                        <div class="col">
                            <a href="{{ route('order.text-order') }}" class="btn btn-outline-danger mb-2">{{ __('order.btn-order-simple') }}</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('order.select-order') }}" class="btn btn-outline-danger">{{ __('order.btn-order-select') }}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            {!! __('order.adult') !!}
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    {!! __('order.part1') !!}

                    <a href="{{ route('order.text-order') }}" class="btn btn-outline-danger mb-2">{{ __('order.btn-order-simple') }}</a>

                    {!! __('order.part2') !!}

                    <a href="{{ route('order.select-order') }}" class="btn btn-outline-danger">{{ __('order.btn-order-select') }}</a>

                    <div class="mt-2">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                {{ __('order.btn-order-instructions') }}
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body border border-danger">
                                {!! __('order.order-instructions') !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection