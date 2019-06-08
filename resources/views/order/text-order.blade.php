@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Заказ консультации</h1>
            @isset($layout)
                <p class="text-center font-weight-light">{{ $layout->name_ru }}</p>
            @endisset
        </div>

        <div class="col-8">

            <form method="POST" action="{{ route('order.store') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Введите Ваше имя</label>
                    <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="Имя" value="{{ old('name') }}">
                    <small id="emailHelp" class="form-text text-muted">Ваше имя должно быть настоящим, иначе смысл того что покажут карты не будет соответствовать Вашей личности. </small>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите email" value="{{ old('email') }}">
                    <small id="emailHelp" class="form-text text-muted">Ваш email не будет разглашаться.</small>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="date">Введите дату рождения</label>
                    <input type="date" class="form-control @if ($errors->has('date')) is-invalid @endif" id="date" name="date" placeholder="Дата рождения" value="{{ old('date') }}">
                    <small id="dateHelp" class="form-text text-muted">Ваша дата рождения должны быть настоящими, иначе смысл того что покажут карты не будет соответствовать Вашей личности. </small>
                    @if ($errors->has('date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('date') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="text">Опишите (понятно) ситуацию, о которой хотите получить консультацию.  </label>
                    <textarea class="form-control @if ($errors->has('text')) is-invalid @endif" name="text" id="text" rows="6">{{ old('text') }}</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                </div>

                @isset($layout)
                    <input type="hidden" name="layout" value="{{ $layout->id }}">
                @endisset
                <input type="hidden" name="price" value="@isset($layout->price_uah) {{ $layout->price_uah }} @else 300  @endisset">

                <button type="submit" class="btn btn-outline-danger">Заказать</button>
            </form>
        </div>

        <div class="col-4">
            <div>
                <hr class="divider" />
                <p>Напишите о чём Вы хотите узнать: т.е. опишите Вашу ситуацию и вопрос, который интересует или беспокоит в этом деле. Чем конкретней Ваше описание, тем понятнее и полезнее будет гадание.
                </p>
                <h4>Пример:</h4>
                <p class="font-weight-light">
                    Я хочу узнать … <br />
                    Ситуация такова, что … <br />
                    Самое важное для меня в этом деле … <br />
                    Прежде всего, хочу выяснить (понять) … <br />
                    Мне нужен совет …. (и т.п.) <br />
                </p>
                <ul>
                    <li>
                        Не нужно указывать фамилию, если не хотите.
                    </li>
                    <li>
                        Имя должно быть настоящим, и Ваша дата рождения тоже.
                    </li>
                    <li>
                        Ваше имя и дата рождения это необходимая идентификация для того, чтобы информация, полученная посредством карт, соответствовала Вашей личности.
                    </li>
                </ul>
                <hr class="divider" />

            </div>
        </div>
    </div>

@endsection