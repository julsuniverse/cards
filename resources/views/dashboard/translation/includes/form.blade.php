<form method="POST" action="{{ route('dashboard.translation.update', [$translation]) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="name" class="col-form-label">Name</label>
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $translation->name ?? '') }}">
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <editor inline-template
                text="{{ old('text_en', $translation->text_en ?? '') }}"
                entity-id="{{ $translation->id }}"
                entity-name="translation"
            >
                <div class="form-group">
                    @if($translation->is_html)
                        <div class="form-group">
                            <label for="text_en" class="col-form-label">English</label>

                            <textarea
                                    name="text_en"
                                    id="text_en"
                                    rows="5"
                            >
                                {!! $translation->text_en ?? '' !!}
                            </textarea>
                            @if ($errors->has('text_en'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('text_en') }}</strong></span>
                            @endif
                        </div>
                    @else
                        <div class="form-group">
                            <label for="text_en_simple" class="col-form-label">English</label>
                            <textarea
                                    class="form-control"
                                    rows="3"
                                    id="text_en_simple"
                                    name="text_en"
                                    v-model="content"
                            ></textarea>
                        </div>
                    @endif
                </div>
            </editor>

            <editor inline-template
                text="{{ old('text_ru', $translation->text_ru ?? '') }}"
                entity-id="{{ $translation->id }}"
                entity-name="translation"
            >
                <div class="form-group">
                    @if($translation->is_html)
                        <div class="form-group">
                            <label for="text_ru" class="col-form-label">Русский</label>

                            <textarea
                                    name="text_ru"
                                    id="text_ru"
                                    rows="5"
                            >
                                {!! $translation->text_ru ?? '' !!}
                            </textarea>
                            @if ($errors->has('text_ru'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('text_ru') }}</strong></span>
                            @endif
                        </div>
                    @else
                        <div class="form-group">
                            <label for="text_ru_simple" class="col-form-label">Русский</label>

                            <textarea
                                        class="form-control"
                                        rows="3"
                                        id="text_ru_simple"
                                        name="text_ru"
                                        v-model="content"
                                ></textarea>
                        </div>
                    @endif
                </div>
            </editor>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>