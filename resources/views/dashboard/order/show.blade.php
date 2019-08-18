@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Заказ</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.order.index') }}" class="btn btn-secondary mr-1">Назад</a>
                            <a class="btn btn-outline-success" href="{{route('dashboard.order.edit', $order)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </div>

                        <table class="table table-bordered table-striped">
                            <tbody>

                            <tr>
                                <th>Пользователь</th>
                                <td>{{ $order->user->name }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $order->user->email }}</td>
                            </tr>

                            <tr>
                                <th>Дата рождения</th>
                                <td>{{ $order->user->dob }}</td>
                            </tr>

                            <tr>
                                <th>Расклад</th>
                                <td>{{ $order->layout->name_ru ?? '-' }}</td>
                            </tr>

                            <tr>
                                <th>Дата заказа</th>
                                <td>{{ $order->created_at->format('d.m.Y H:m') }}</td>
                            </tr>

                            <tr>
                                <th>Статус</th>
                                <td>{{ $order->status }}</td>
                            </tr>

                            <tr>
                                <th>Цена</th>
                                <td>{{ $order->price }}</td>
                            </tr>

                            <tr>
                                <th>Описание</th>
                                <td>{{ $order->description }}</td>
                            </tr>

                            <tr>
                                <th>Ответ</th>
                                <td>{{ $order->answer ?? 'Ответ еще не был дан' }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection