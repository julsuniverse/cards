@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Редактировать заказ <b>"{{ $order->id }}"</b></div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.order.index') }}" class="btn btn-secondary mr-1">Назад</a>
                        </div>

                        @include('dashboard.order.includes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection