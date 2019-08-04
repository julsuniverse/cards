@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Расклады</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('layout.create') }}" class="btn btn-primary">Добавить расклад</a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>Тема</th>
                                <th>Тип</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($layouts as $layout)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('layout.edit', [$layout]) }}">{{ $layout->name_ru }}</a></td>
                                    <td>{{ $layout->theme->name }}</td>
                                    <td>{{ $layout->type }}</td>
                                    <td>{{ $layout->price_uah }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        {{ $layouts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection