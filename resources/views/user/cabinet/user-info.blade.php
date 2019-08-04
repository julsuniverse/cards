<form method="post" action="{{ route('cabinet.edit', ['user' => $user]) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Ваше имя</label>
        <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name"
               placeholder="Имя" value="{{ old('name', $user->name) }}">
        <small id="emailHelp" class="form-text text-muted">Ваше имя должно быть настоящим, иначе смысл того что покажут карты не будет соответствовать Вашей личности. </small>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email"
               aria-describedby="emailHelp" placeholder="Введите email" value="{{ old('email', $user->email) }}">
        <small id="emailHelp" class="form-text text-muted">Ваш email не будет разглашаться.</small>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="date">Дата рождения</label>
        <input type="date" class="form-control @if ($errors->has('date')) is-invalid @endif" id="date" name="date"
               placeholder="Дата рождения" value="{{ old('date', $user->dob) }}">
        <small id="dateHelp" class="form-text text-muted">Ваша дата рождения должны быть настоящими, иначе смысл того что покажут карты не будет соответствовать Вашей личности. </small>
        @if ($errors->has('date'))
            <div class="invalid-feedback">
                {{ $errors->first('date') }}
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>