@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="p-1">
                <h1 class="text-center">{{ __('order-success.title') }}</h1>
                @if(!$isUserOld)
                    <p class="font-weight-bold text-center">{{ __('order-success.info') }}</p>
                @endif
                <div class="row text-center mt-3">
                    <div class="col-6">
                        <a href="{{ route('login') }}" class="btn btn-danger"><b>{{ __('order-success.btn-cabinet') }}</b></a>
                    </div>
                    <div class="col">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger"><b>{{ __('order-success.btn-home') }}</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
