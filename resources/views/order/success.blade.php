@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card p-5">
                <h1 class="text-center">Спасибо за Ваш заказ!</h1>
                <p class="font-weight-bold text-center">Для вас был создан Ваш персональный аккаунт, данные для входа были отправлены на введенный вами email.</p>
                <div class="row text-center mt-3">
                    <div class="col-6">
                        <a href="{{ route('login') }}" class="btn btn-danger">Войти в аккаунт</a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger">Вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection