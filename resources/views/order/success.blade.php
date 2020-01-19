@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="p-5">
                <h1 class="text-center">{{ __('order-success.title') }}</h1>
                @if($isUserNew)
                    <p class="font-weight-bold text-center">{{ __('order-success.info') }}</p>
                @endif
                <div class="row text-center mt-3">
                    @if($isUserNew)
                        <div class="col-6">
                            <a href="{{ route('login') }}" class="btn btn-danger">{{ __('order-success.btn-cabinet') }}</a>
                        </div>
                    @endif
                    <div class="col">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger">{{ __('order-success.btn-home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection