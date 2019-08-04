@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Редактировать расклад <b>"{{ $layout->name }}"</b></div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('layout.index', [$layout]) }}" class="btn btn-success mr-1">Назад</a>
                            @include('dashboard.layout.includes.delete')
                        </div>

                        @include('dashboard.layout.includes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection