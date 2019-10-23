@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ __('order-select.title') }}</h1>
            <p class="font-weight-light text-center">{!! __('order-select.select-theme') !!}  </p>

            <div class="accordion" id="layoutsAccordion">
                @foreach($layouts as $layoutGroup)
                    <div class="mt-4"><hr class="divider"/></div>
                    <h3 class="text-center">
                        @if(app()->getLocale() == 'en')
                            {{ $layoutGroup[0]->theme->name }}
                        @else
                            {{ $layoutGroup[0]->theme->name_ru }}
                        @endif
                    </h3>
                    @foreach($layoutGroup as $layout)
                <div class="card">
                    <div class="card-header" id="heading-{{$layout->id}}">
                        <p class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{$layout->id}}" aria-expanded="true" aria-controls="collapse-{{$layout->id}}">
                                @if(app()->getLocale() == 'en')
                                    {{ $layout->name }}
                                @else
                                    {{ $layout->name_ru }}
                                @endif

                                @if(app()->getLocale() == 'en')
                                    @if($layout->price_usd)
                                        <span class="badge badge-primary badge-pill">{{ $layout->price_usd }} $</span>
                                    @endif
                                @else
                                    @if($layout->price_uah)
                                        <span class="badge badge-primary badge-pill">{{ $layout->price_uah }} грн</span>
                                    @endif
                                @endif
                            </button>
                            <a href="{{ route('order.text-order', $layout) }}" class="btn btn-success float-right">{{ __('order.btn-order') }}</a>
                        </p>
                    </div>

                    <div id="collapse-{{$layout->id}}" class="collapse" aria-labelledby="heading-{{$layout->id}}" data-parent="#layoutsAccordion">
                        <div class="card-body">
                            @if(app()->getLocale() == 'en')
                                {!! $layout->text !!}
                            @else
                                {!! $layout->text_ru !!}
                            @endif
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>

@endsection