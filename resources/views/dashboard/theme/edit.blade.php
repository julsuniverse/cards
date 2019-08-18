@extends('dashboard.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Редактировать тему <b>"{{ $theme->name }}"</b></div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.theme.index') }}" class="btn btn-secondary mr-1">Назад</a>
                            @include('dashboard.theme.includes.delete')
                        </div>

                        @include('dashboard.theme.includes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection