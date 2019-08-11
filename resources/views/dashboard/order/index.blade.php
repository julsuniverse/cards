@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Заказы</div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Пользователь</th>
                                <th>Дата рождения</th>
                                <th>Расклад</th>
                                <th>Дата заказа</th>
                                <th>Статус</th>
                                <th>Цена</th>
                                <th>Описание</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->dob }}</td>
                                    <td>{{ $order->layout->name_ru ?? '-' }}</td>
                                    <td>{{ $order->created_at->format('d.m.Y H:m') }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>
                                        {{ substr($order->description, 0, 100) }}
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="{{route('order.show', $order)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="btn btn-outline-success" href="{{route('order.edit', $order)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection