<form method="POST" action="@isset($card) {{ route('dashboard.daily-card.update', [$card]) }} @else {{ route('dashboard.daily-card.store') }}@endif" enctype="multipart/form-data">
    @csrf
    @isset($card)
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="type" class="col-form-label">Тип</label>
                <select name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}">
                    @foreach($types as $key => $type)
                        <option value="{{ $key }}">{{ $type }}</option>
                    @endforeach
                </select>
                @if ($errors->has('type'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="name_ru" class="col-form-label">Название</label>
                <input id="name_ru" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru', $card->name_ru ?? '') }}" required>
                @if ($errors->has('name_ru'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <label for="name_en" class="col-form-label">Название на английском</label>
                <input id="name_en" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ old('name_en', $card->name_en ?? '') }}" required>
                @if ($errors->has('name_en'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name_en') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="image">Изображение</label>
                <p>
                    @isset($card)
                        <img src="{{asset($card->image)}}" style="max-height: 150px" />
                    @endif
                </p>
                <input name="image" type="file" class="form-control-file" id="image">
                @if ($errors->has('image'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('image') }}</strong></span>
                @endif
            </div>

            <editor inline-template
                text="{{ old('description_ru', $card->description_ru ?? '') }}"
                entity-id="{{ $card->id ?? null }}"
                entity-name="card"
            >
                <div class="form-group">
                    <label for="name_en" class="col-form-label">Описание на русском</label>
                    <froala
                            v-if="config"
                            :tag="'textarea'"
                            :config="config"
                            v-model="content"
                            id="description_ru" name="description_ru"
                    ></froala>
                </div>
            </editor>

            <editor inline-template
                text="{{ old('description_ru', $card->description_en ?? '') }}"
                entity-id="{{ $card->id ?? null }}"
                entity-name="card"
            >
                <div class="form-group">
                    <label for="name_en" class="col-form-label">Описание на английском</label>

                    <froala
                            v-if="config"
                            :tag="'textarea'"
                            :config="config"
                            v-model="content"
                            id="description_en" name="description_en"
                    ></froala>
                </div>
            </editor>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>