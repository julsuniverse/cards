@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Заказ</div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <a href="{{ route('dashboard.order.index') }}" class="btn btn-secondary mr-2">Назад</a>
                            <a class="btn btn-outline-success mr-2" href="{{route('dashboard.order.edit', $order)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            @if($order->status != \App\Models\Order::STATUS_ACCEPTED)
                            <form method="POST" action="{{ route('dashboard.order.accept', $order) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger mr-2">Принять заказ</button>
                            </form>
                            @else
                                <button type="submit" class="btn btn-danger mr-2" disabled>Заказ принят</button>
                            @endif
                            <form method="POST" action="{{ route('dashboard.login-as', $user) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary mr-2">Кабинет пользователя</button>
                            </form>
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
                                <td>
                                    <span class="badge {{ $order->status_class[$order->status] }}">{{ __('order-statuses.status.' . $order->status) }}</span>
                                </td>
                            </tr>

                            <tr>
                                <th>Цена</th>
                                <td>{{ $order->price }}</td>
                            </tr>

                            <tr>
                                <th>Карты</th>
                                <td>{{ $order->cards }}</td>
                            </tr>

                            <tr>
                                <th>Описание</th>
                                <td>{{ $order->description }}</td>
                            </tr>

                            <tr>
                                <th>Ответ</th>
                                <td><a href="{{ route('dashboard.order.preview', $order) }}" class="btn btn-primary">Посмотреть ответ</a> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
