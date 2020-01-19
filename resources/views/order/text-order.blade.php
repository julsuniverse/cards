@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ __('order-form.title') }}</h1>
            @isset($layout)
                <p class="text-center font-weight-light">
                    @if(app()->getLocale() == 'en')
                        {!! $layout->name !!}
                    @else
                        {!! $layout->name_ru !!}
                    @endif
                </p>
            @else
                <div class="mb-2">{!! __('order.price') !!}  </div>
            @endisset
        </div>

        <div class="col-md-8 col-sm-12 order-md-1 order-sm-2">

            <form method="POST" action="{{ route('order.store') }}">
                @csrf
                @method('PUT')
                @if(!$user)
                    <div class="form-group">
                        <label for="name">{{ __('order-form.name') }}</label>
                        <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="{{ __('order.order.name') }}" value="{{ old('name') }}">
                        <small id="emailHelp" class="form-text text-muted">{!! __('order-form.name-help') !!}</small>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('order-form.email') }}</label>
                        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                        <small id="emailHelp" class="form-text text-muted">{!! __('order-form.email-help') !!}</small>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date">{{ __('order-form.date') }}</label>
                        <input type="date" class="form-control @if ($errors->has('date')) is-invalid @endif" id="date" name="date" placeholder="Дата рождения" value="{{ old('date') }}">
                        <small id="dateHelp" class="form-text text-muted">{!! __('order-form.date-help') !!}  </small>
                        @if ($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                    </div>

                @endif
                <div class="form-group">
                    <label class="form-check-label" for="text">{!! __('order-form.text') !!}  </label>
                    <textarea class="form-control @if ($errors->has('text')) is-invalid @endif" name="text" id="text" rows="6">{{ old('text') }}</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                </div>

                @isset($layout)
                    <input type="hidden" name="layout" value="{{ $layout->id }}">
                @endisset
                <input type="hidden" name="price" value="@isset($layout->price_uah) {{ $layout->price_uah }} @else 300  @endisset">
                <input type="hidden" name="user" value="@isset($user) {{ $user->id }} @else {{ null }} @endisset">

                <button type="submit" class="btn btn-outline-danger">{{ __('order.btn-order') }}</button>
            </form>
        </div>

        <div class="col-md-4 col-sm-12 order-md-2 order-sm-1">
            <div>
                <hr class="divider" />
                {!! __('order-form.example') !!}
                <hr class="divider" />

            </div>
        </div>
    </div>

@endsection