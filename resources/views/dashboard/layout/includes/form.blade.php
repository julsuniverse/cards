<form method="POST" action="{{ isset($layout) ? route('layout.update', [$layout]) : route('layout.store') }}">
    @csrf
    @isset($layout) @method('PUT') @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="name_ru" class="col-form-label">Название</label>
                <input id="name_ru" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru', $layout->name_ru ?? '') }}" required>
                @if ($errors->has('name_ru'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="name" class="col-form-label">Название англ.</label>
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $layout->name ?? '') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="type" class="col-form-label">Тип</label>
                <select name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}">
                        <option value="tarot">ТАРО</option>
                        <option value="lenormand">Ленорман</option>
                </select>
                @if ($errors->has('type'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label for="theme_id" class="col-form-label">Тема</label>
                <select name="theme_id" class="form-control{{ $errors->has('theme_id') ? ' is-invalid' : '' }}">
                        @foreach($themes as $theme)
                            <option value="{{ $theme->id }}">{{ $theme->name_ru }}</option>
                        @endforeach
                </select>
                @if ($errors->has('theme_id'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('theme_id') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label class="form-check-label" for="text_ru">Описание</label>
                <textarea class="form-control @if ($errors->has('text_ru')) is-invalid @endif" name="text_ru" id="text" rows="6">{{ old('text_ru', $layout->text_ru) }}</textarea>
                @if ($errors->has('text_ru'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_ru') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="form-check-label" for="text">Описание англ.</label>
                <textarea class="form-control @if ($errors->has('text')) is-invalid @endif" name="text" id="text" rows="6">{{ old('text', $layout->text) }}</textarea>
                @if ($errors->has('text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text') }}
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="price_uah" class="col-form-label">Цена в гривнах</label>
                    <input id="price_uah" class="form-control{{ $errors->has('price_uah') ? ' is-invalid' : '' }}" name="price_uah" value="{{ old('price_uah', $layout->price_uah ?? '') }}">
                    @if ($errors->has('price_uah'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('price_uah') }}</strong></span>
                    @endif
                </div>

                <div class="form-group col-md-3">
                    <label for="price_usd" class="col-form-label">Цена в долларах</label>
                    <input id="price_usd" class="form-control{{ $errors->has('price_usd') ? ' is-invalid' : '' }}" name="price_usd" value="{{ old('price_usd', $layout->price_usd ?? '') }}">
                    @if ($errors->has('price_usd'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('price_usd') }}</strong></span>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>