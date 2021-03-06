@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ $order->created_at->format('d-m-Y') }}</span>
            <div class="m-auto">
                <p class="border border-danger rounded p-3 mt-3 font-italic text-center">
                    {{ $order->description }}
                </p>
            </div>
            <hr>

            <div class="mt-3">
                {!! $order->answer !!}
            </div>

            @if($order->photo)
                <div class="text-center">
                    <img src="{{ asset($order->photo) }}" style="max-width: 100%" class="m-auto">
                    <hr>
                </div>
            @endif

        </div>
    </div>

@endsection
