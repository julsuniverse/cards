@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Карты</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.daily-card.create', ['type' => $type]) }}" class="btn btn-primary">Добавить карту</a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Карта</th>
                                <th>Тип</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($cards as $card)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $card->name_ru }}</td>
                                    <td>{{ $card->type}}</td>
                                    <td class="text-center">
                                        <img src="{{ asset($card->image) }}" style="max-width: 100px; height: 100px" />
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-success" href="{{route('dashboard.daily-card.edit', $card)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection