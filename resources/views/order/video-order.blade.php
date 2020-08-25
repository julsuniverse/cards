@extends('layout.main')

@push('ads')

    <script>
        function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-672975950/z-OnCLn48McBEM6Y88AC', 'transaction_id': '', 'event_callback': callback }); return false; }
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <h3>{{ __('order-form-video.title') }}</h3>
            @isset($layout)
                <p class="text-center sub-title mb-3">
                    @if(app()->getLocale() == 'en')
                        {!! $layout->name !!}
                    @else
                        {!! $layout->name_ru !!}
                    @endif
                </p>
            @else
                <div class="mb-2">{!! __('order-video.price') !!}  </div>
            @endisset
        </div>

        <div class="col-md-8 col-sm-12 order-md-1 order-sm-2">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    {!! implode('', $errors->all('<div>:message <br></div>')) !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form method="POST" action="{{ route('order.store-video') }}" class="order-form">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-check-label" for="text">{!! __('order-form-video.text') !!}  </label>
                    <textarea class="form-control @if ($errors->has('text')) is-invalid @endif" name="text" id="text" rows="6">{{ old('text') }}</textarea>
                    @if ($errors->has('text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('text') }}
                        </div>
                    @endif
                </div>

                <div class="form-group mt-2">
{{--
                    <label for="cards">{!! __('order-form-video.choose-cards') !!}</label>
--}}
                    <select class="form-control" id="cards" name="cards">
                        <option value="tarot" @if(old('cards', $cards) == 'tarot') selected @endif>{{ __('order-form.tarot') }}</option>
                        <option value="lenormand" @if(old('cards', $cards) == 'lenormand') selected @endif>{{ __('order-form.lenormand') }}</option>
                    </select>
                    @if ($errors->has('cards'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cards') }}
                        </div>
                    @endif
                </div>

                @if(!$user)
                    <div class="form-group">
                        <label for="name">{!! __('order-form-video.name')  !!} </label>
                        <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" id="name" name="name" placeholder="{{ __('order.order.name') }}" value="{{ old('name') }}">
{{--
                        <small id="emailHelp" class="form-text text-muted">{!! __('order-form-video.name-help') !!}</small>
--}}
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="date">{!! __('order-form-video.date') !!}</label>
                        <input class="form-control @if ($errors->has('date')) is-invalid @endif" id="date" name="date" placeholder="Дата рождения" value="{{ old('date') }}">
{{--
                        <small id="dateHelp" class="form-text text-muted">{!! __('order-form-video.date-help') !!}  </small>
--}}
                        @if ($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">{!! __('order-form-video.email')  !!}</label>
                        <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                        <small id="emailHelp" class="form-text text-muted">{!! __('order-form-video.email-help') !!}</small>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                @endif

                <div class="custom-control custom-checkbox mb-2">
                    <input type="hidden" name="agree" value="0">
                    <input type="checkbox" class="custom-control-input" id="agree" name="agree" value="1">
                    @if(app()->getLocale() == 'en')
                        <label class="custom-control-label" for="agree">{{ __('order.order.agree', ['price' => isset($layout->price_uah) ? '$' . $layout->price_uah : '$' . __('price-video.value')]) }}</label>
                    @else
                        <label class="custom-control-label" for="agree">{{ __('order.order.agree', ['price' => isset($layout->price_uah) ? $layout->price_uah . ' грн.': __('price-video.value') . ' грн.']) }}</label>
                    @endif
                    @if ($errors->has('agree'))
                        <div class="invalid-feedback font-weight-bold">
                            {{ $errors->first('agree') }}
                        </div>
                    @endif
                </div>

                @isset($layout)
                    <input type="hidden" name="layout" value="{{ $layout->id }}">
                @endisset
                <input type="hidden" name="price" value="@isset($layout->price_uah) {{ $layout->price_uah }} @else {{ __('price-video.value') }} @endisset">
                <input type="hidden" name="user" value="@isset($user) {{ $user->id }} @else {{ null }} @endisset">

                <button type="submit" class="btn btn-danger" onclick="gtag_report_conversion()"><b>{{ __('order.btn-order') }}</b></button>
            </form>
        </div>

        <div class="col-md-4 col-sm-12 order-md-2 order-sm-1">
            <div>
                <hr class="divider" />
                {!! __('order-form-video.example') !!}
                <hr class="divider" />
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="{{ asset('js/allowCopy.js') }}"></script>
@endpush
