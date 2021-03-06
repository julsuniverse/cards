@extends('layout.main')
@section('pre-content')
<div class="container top-container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="top-block">
                <h1 class="display-3 logo">{{ trans('menu.name') }}</h1>
                <div class="sub-logo">
                    {!! __('main-page.top-block-1') !!}
                </div>
            </div>
        </div>
    </div>

    <hr class="divider"/>

    <div class="row">
        <div class="col-12 text-center top-block-info mt-1">
            <p class="mb-0 font-weight-bold">
                {!!  __('main-page.top-block-2') !!}
            </p>
        </div>
        <div class="col-12 text-center top-block-info">
            <div id="youtube" class="text-center mt-1">
                <youtube-button
                    image-link="{{ asset('images/youtube.png') }}"
                ></youtube-button>
            </div>
        </div>

        <div class="col-12 text-center top-block-info">
            <p class="mb-0 font-weight-bold">
                {!!  __('main-page.top-block-3') !!}
            </p>
        </div>
        <!--<div class="top-block-buttons">-->
    {{--<div class="col-sm-12 col-md-6 text-xl-center text-lg-right text-md-right text-sm-center text-center main-top-btn">
        <form method="post" action="{{ route('set-cards') }}">
            @csrf
            <input type="hidden" value="tarot" name="cards">
            <button type="submit" class="btn btn-danger font-weight-bold btn-consultation">{!!  __('main-page.top-block-btn1') !!}</button>
        </form>

    </div>
    <div class="col-sm-12 col-md-6 text-xl-center text-lg-left text-md-left text-sm-center text-center main-top-btn">
        <form method="post" action="{{ route('set-cards') }}">
            @csrf
            <input type="hidden" value="lenormand" name="cards">
            <button type="submit" class="btn btn-danger font-weight-bold btn-consultation">{!!  __('main-page.top-block-btn2') !!}</button>
        </form>
    </div>--}}
    <!--</div>-->
    </div>
</div>

<hr class="divider"/>
    @endsection

@section('content')
    <div class="main-content main-page-content">
        <div class="row info-block">
            <div class="col-xl-6 col-md-12">
                <div class="text-center">
                   {{-- <p>{!!  __('main-page.main-block-4') !!}</p>--}}
                    <div class="mx-auto text-center mb-1 mt-0">
                        <a href="{{ route('order.index') }}" class="btn btn-danger"><b>{!!  __('order.btn-order-simple') !!}</b></a>
                    </div>
                </div>
            </div>
            @if(App::getLocale() == 'ru')
                <div class="col-xl-6 col-md-12">
                    <div class="text-center">
                        <div class="mx-auto text-center mb-2">
                            <a href="{{ route('order.video') }}" class="btn btn-danger"><b>{!!  __('order-video.btn-order-simple') !!}</b></a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-xl-12 col-md-12">
                <div class="text-center">
                    <div class="mx-auto text-center mb-1 mt-0">
                        <a href="{{ route('terms') }}" class="btn btn-primary"><b>{!!  __('menu.terms') !!}</b></a>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row info-block">
            <div class="col-12">
                <div class="text-center">
                    <p>{!!  __('main-page.main-block-12') !!}</p>
                </div>
            </div>
        </div>--}}

        <div class="row info-block">
            <div class="col-xl-12 col-lg-12 col-md-12 text-center position-relative mt-2">
                <img id="header-img" src="{{ asset('images/top-img.gif') }}" style="max-width: 100%" />
            </div>
        </div>

        <!-- ORACLE -->
        <hr class="divider"/>
        <div class="row info-block" id="oracle-tarot">
            <div class="col-12">
                <h2 class="text-center blue-title">{{ __('main-page.main-block-6-title') }}</h2>

                <p class="text-center font-weight-bold">
                    {!!  __('main-page.main-block-6-subtitle') !!}
                </p>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col-12 mb-1">
                <h2>{{ __('random-card.taro-title') }}</h2>
                <div class="text-small text-center font-weight-bold mb-2">{{ __('random-card.tarot-small') }} </div>
                <div class="row mt-md-2">
                    <div class="col-sm-12 col-md-4">
                        <span class="text-center">
                            <a href="{{ route('daily-card', ['type' => 'tarot-day']) }}" class="btn btn-danger random-card-btn" target="_blank">
                                <b>{{ __('random-card.tarot1') }}</b>
                            </a>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <span class="text-center">
                            <a href="{{ route('daily-card', ['type' => 'tarot-advice']) }}" class="btn btn-danger random-card-btn" target="_blank">
                                <b>
                                    {{ __('random-card.tarot2') }}
                                </b>
                            </a>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <span class="text-center">
                            <a href="{{ route('daily-card', ['type' => 'tarot-love']) }}" class="btn btn-danger random-card-btn random-card-btn-last" target="_blank">
                                <b>
                                    {{ __('random-card.tarot3') }}
                                </b>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="divider"/>

        <div class="row text-center mt-2" id="oracle-lenormand">
            <div class="col-12">
                <h2>{{ __('random-card.lenormand-title') }}</h2>
                <div class="text-small text-center font-weight-bold mb-2">{{ __('random-card.lenormand-small') }}</div>
                <p class="text-center font-weight-bold">
                    {!! __('random-card.lenormand-intro') !!}
                </p>
                <p class="text-center">
                    <a href="{{ route('daily-card', ['type' => 'lenormand']) }}" class="btn btn-danger mt-3 mb-1" target="_blank">
                        <b>
                            {{ __('random-card.lenormand') }}
                        </b>
                    </a>
                </p>
            </div>

        </div>
        <hr class="divider"/>

        <div class="row text-center" id="oracle-runes">
            <div class="col-12">
                <h2>{!! __('main-page.main-block-11-title') !!}</h2>
                <h4>{!! __('main-page.main-block-11-subtitle')  !!}</h4>
                <div class="text-small font-weight-bold">{!! __('main-page.main-block-11-small') !!}  </div>
                {!!  __('main-page.main-block-11-text') !!}
            </div>
        </div>
        <div class="mx-auto text-center mt-3">
            <a href="{{ route('daily-card', ['type' => 'runes']) }}" class="btn btn-danger mb-1" target="_blank"><b>{!! __('main-page.main-block-11-btn') !!}</b>  </a>
        </div>

        <hr class="divider"/>

        <!-- END ORACLE -->

        <img src="{{ asset('images/after-oracle.jpg') }}" style="max-width: 100%">

        <div class="row info-block" id="tarot">
            <div class="col-12">
                <h2 class="text-center mt-3">{!!  __('main-page.main-block-2-title') !!} </h2>
                <div class="">
                    {!!  __('main-page.main-block-2') !!}
                </div>
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="lenorman">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-3-title') !!}</h2>
                <p class="text-center font-weight-light">
                    {!!  __('main-page.main-block-3') !!}
                </p>
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="consultation">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-5-title') !!}</h2>
                {!!  __('main-page.main-block-5') !!}

                <div class="row info-block mb-3 mt-3">
                    <div class="col-xl-6 col-md-12">
                        <div class="text-center">
                            <div class="mx-auto text-center mb-1 mt-0">
                                <a href="{{ route('order.index') }}" class="btn btn-danger"><b>{!!  __('order.btn-order-simple') !!}</b></a>
                            </div>
                        </div>
                    </div>
                    @if(App::getLocale() == 'ru')
                        <div class="col-xl-6 col-md-12">
                            <div class="text-center">
                                <div class="mx-auto text-center mb-2">
                                    <a href="{{ route('order.video') }}" class="btn btn-danger"><b>{!!  __('order-video.btn-order-simple') !!}</b></a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-xl-12 col-md-12">
                        <div class="text-center">
                            <div class="mx-auto text-center mb-1 mt-0">
                                <a href="{{ route('terms') }}" class="btn btn-primary"><b>{!!  __('menu.terms') !!}</b></a>
                            </div>
                        </div>
                    </div>
                </div>

                {!!  __('main-page.main-block-6') !!}
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="future">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-7-title') !!}</h2>
                {!!  __('main-page.main-block-7') !!}

                @if(__('main-page.main-block-8') !== 'main-page.main-block-8')
                    {!!  __('main-page.main-block-8') !!}
                @endif
            </div>
        </div>
        <hr class="divider"/>
        <div class="row info-block">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 order-xl-1 order-lg-2 order-md-2 order-sm-2 order-2 mt-lg-2">
                {!!  __('main-page.main-block-9') !!}
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 order-xl-2 order-lg-1 order-md-1 order-sm-1 order-1 text-center mb-3 m-md-auto ">
                <img src="{{ asset('images/story.jpg') }}" class="daily-card-img" />
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="oracle-runes">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-10-title') !!}</h2>
                    {!!  __('main-page.main-block-10') !!}
            </div>
        </div>

        <hr class="divider"/>
    </div>

    <img src="{{ asset('images/cat.jpg') }}" style="max-width: 100%" />
@endsection
