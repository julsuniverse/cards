<form method="POST" action="{{ route('dashboard.order.update', [$order]) }}">
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



            <editor inline-template
                text="{{ old('answer', $order->answer ?? '') }}"
            >
                <div class="form-group">
                    <label for="answer">Ответ</label>
                    <froala
                            v-if="config"
                            :tag="'textarea'"
                            :config="config"
                            v-model="content"
                            id="answer" name="answer"
                    ></froala>
                </div>
            </editor>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>