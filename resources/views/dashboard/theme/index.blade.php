@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Темы раскладов</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.theme.create') }}" class="btn btn-primary">Добавить тему</a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название</th>
                                <th>English name</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($themes as $theme)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('dashboard.theme.edit', [$theme]) }}">{{ $theme->name_ru }}</a></td>
                                    <td>{{ $theme->name }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        {{ $themes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection