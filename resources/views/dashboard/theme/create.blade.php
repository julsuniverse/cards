@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Создать тему</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('theme.index') }}" class="btn btn-secondary mr-1">Назад</a>
                        </div>
                        @include('dashboard.theme.includes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection