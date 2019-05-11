@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Заказ консультации</h1>
        </div>

        <div class="col-8">

            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="name">Введите Ваше имя</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
                    <small id="emailHelp" class="form-text text-muted">Ваше имя и дата рождения должны быть настоящими, иначе смысл того что покажут карты не будет соответствовать Вашей личности. </small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
                    <small id="emailHelp" class="form-text text-muted">Ваш email не будет разглашаться.</small>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="text">Опишите понятно ситуацию, о которой хотите получить консультацию.  </label>
                    <textarea class="form-control" name="text" id="text" rows="6"></textarea>
                </div>
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