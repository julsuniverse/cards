<form method="POST" action="{{ route('dashboard.order.update', [$order]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div>
                <p>
                    <b>Имя:</b> {{ $order->user->name }}
                </p>
                <p>
                    <b>Дата рождения:</b> {{ $order->user->dob }}
                </p>
                <p>
                    <b>Email:</b> {{ $order->user->email }}
                </p>
                <p>
                    <b>Описание:</b> <br>
                    {{ $order->description }}
                </p>
                <p>
                    <b>Цена:</b>
                    {{ $order->price }}
                </p>
            </div>

            <hr class="divider">

            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $order->price) }}">
            </div>

            <div class="form-group">
                <label for="status">Статус</label>
                <select class="form-control" id="status" name="status">
                    @foreach($order->statuses as $status)
                        <option @if($order->status === $status) selected @endif
                                value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
                @if ($errors->has('status'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('status') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="image">Изображение</label>
                <p>
                    @if($order->photo)
                        <img src="{{asset($order->photo)}}" style="max-height: 150px" />
                    @endif
                </p>
                <input name="photo" type="file" class="form-control-file" id="photo">
                @if ($errors->has('photo'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('photo') }}</strong></span>
                @endif
            </div>

            <editor inline-template
                    text="{{ old('answer', $order->answer ?? '') }}"
            >
                <div class="form-group">
                    <label for="answer">Ответ</label>
                    <textarea
                            name="answer"
                            id="answer"
                            rows="5"
                    >
                        {!!$order->answer  ?? '' !!}
                    </textarea>
                    @if ($errors->has('answer'))
                        <div class="invalid-feedback">
                            {{ $errors->first('answer') }}
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