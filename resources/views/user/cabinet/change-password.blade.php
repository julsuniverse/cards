<form method="post" action="{{ route('cabinet.password', ['user' => $user]) }}">
    @csrf
    @method('PUT')

    <p class="font-weight-bold">Смена пароля</p>
    <div class="form-group">
        <label for="password">Новый Пароль</label>
        <input name="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif"
               id="password" placeholder="Password" autocomplete="new-password">
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="password-repeat">Повторите пароль</label>
        <input name="password_confirmation" type="password" class="form-control" id="password-repeat" placeholder="Repeat Password">
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{ $errors->first('password_confirmation') }}
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>