@extends('layout.main')

@section('content')
    <div class="main-content">
        <h1>{{ __('random-card.tarot1') }}</h1>
        <hr class="divider"/>

        <div class="row text-center">
            <div class="col-6">
                <img src="{{ asset($card->image) }}">
                <h4>
                    @if(app()->getLocale() == 'ru')
                        {!! $card->name_ru !!}
                    @elseif(app()->getLocale() == 'en')
                        {!! $card->name_en !!}
                    @endif
                </h4>

            </div>
            <div class="col-6">
                @if(app()->getLocale() == 'ru')
                    {!! $card->description_ru !!}
                @elseif(app()->getLocale() == 'en')
                    {!! $card->description_en !!}
                @endif
            </div>
        </div>

        <hr class="divider"/>
    </div>
@endsection

