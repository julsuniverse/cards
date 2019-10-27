@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Редактировать{{ $card->name }}</div>
                    <div class="d-flex flex-row mb-3">
                        <a href="{{ route('dashboard.daily-card.index', ['type' => $card->type]) }}" class="btn btn-secondary mr-1">Назад</a>
                    </div>
                    <div class="card-body">
                        @include('dashboard.random-card.includes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection