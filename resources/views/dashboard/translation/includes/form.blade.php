<form method="POST" action="{{ route('dashboard.translation.update', [$translation]) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <editor inline-template
                text="{{ old('text_en', $translation->text_en ?? '') }}"
                entity-id="{{ $translation->id }}"
                entity-name="translation"
            >
                <div class="form-group">
                    <label for="text_en">English</label>
                    @if($translation->is_html)
                        <froala
                                v-if="config"
                                :tag="'textarea'"
                                :config="config"
                                v-model="content"
                                id="text_en" name="text_en"
                        ></froala>
                    @else
                        <div class="form-group">
                            <textarea
                                    class="form-control"
                                    rows="3"
                                    id="text_en"
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
                    <label for="text_ru">Русский</label>
                    @if($translation->is_html)
                        <froala
                                v-if="config"
                                :tag="'textarea'"
                                :config="config"
                                v-model="content"
                                id="text_ru" name="text_ru"
                        ></froala>
                    @else
                        <div class="form-group">
                                <textarea
                                        class="form-control"
                                        rows="3"
                                        id="text_ru"
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