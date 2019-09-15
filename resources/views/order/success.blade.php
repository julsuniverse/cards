@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card p-5">
                <h1 class="text-center">{{ __('order-success.title') }}</h1>
                <p class="font-weight-bold text-center">{{ __('order-success.info') }}</p>
                <div class="row text-center mt-3">
                    <div class="col-6">
                        <a href="{{ route('login') }}" class="btn btn-danger">{{ __('order-success.btn-cabinet') }}</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger">{{ __('order-success.btn-home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection