<form method="POST" action="{{ isset($theme) ? route('theme.update', [$theme]) : route('theme.store') }}">
    @csrf
    @isset($theme) @method('PUT') @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="name_ru" class="col-form-label">Название</label>
                <input id="name_ru" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru', $theme->name_ru ?? '') }}" required>
                @if ($errors->has('name_ru'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="name" class="col-form-label">Название англ.</label>
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $theme->name ?? '') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>