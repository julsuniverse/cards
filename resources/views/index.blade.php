@extends('layout.main')
@section('pre-content')
<div class="container top-container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="top-block">
                <h1 class="display-3 logo">{{ trans('menu.name') }}</h1>
                <p class="lead font-weight-bold">
                    {!!  __('main-page.top-block-1') !!}
                </p>
            </div>

            <div class="row">
                <div class="col-12 text-center top-block-info">
                    <p class="mb-0 font-weight-bold">
                        {!!  __('main-page.top-block-2') !!}
                    </p>
                </div>
                <!--<div class="top-block-buttons">-->
                    <div class="col-6 text-center mt-md-5">
                        <a href="{{ route('order.index') }}" class="btn btn-outline-danger font-weight-bold btn-consultation">{!!  __('main-page.top-block-btn1') !!}</a>
                    </div>
                    <div class="col-6 text-center mt-md-5">
                        <a href="{{ route('order.index') }}" class="btn btn-outline-danger font-weight-bold btn-consultation">{!!  __('main-page.top-block-btn2') !!}</a>
                    </div>
                <!--</div>-->
            </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center">
            <img src="{{ asset('images/top-img.gif') }}" />
        </div>
    </div>
</div>

<hr class="divider"/>
    @endsection

@section('content')
    <div class="main-content main-page-content">

        <div class="row info-block">
            <div class="col-12 text-justify mt-2">
                {!!  __('main-page.main-block-1') !!}
            </div>
        </div>


        <div class="row info-block" id="tarot">
            <div class="col-12">
                <h2 class="text-center mt-3">{!!  __('main-page.main-block-2-title') !!} </h2>
                <p>
                    {!!  __('main-page.main-block-2') !!}
                </p>
            </div>
        </div>

        <div class="row info-block" id="lenorman">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-3-title') !!}</h2>
                <p class="text-center font-weight-light">
                    {!!  __('main-page.main-block-3') !!}
                </p>
            </div>
        </div>

        <!--<div class="row info-block">
            <div class="col-12">
                <div class="text-center">
                    <p class="font-italic">{!!  __('main-page.main-block-4') !!}</p>
                </div>
            </div>
        </div>-->

        <div class="row info-block" id="consultation">
            <div class="col-12">
                <h2 class="text-center mt-3">{!!  __('main-page.main-block-5-title') !!}</h2>
                {!!  __('main-page.main-block-5') !!}

                <div class="mx-auto text-center mb-3 mt-3">
                    <a href="{{ route('order.index') }}" class="btn btn-outline-danger">{!!  __('order.btn-order-simple') !!}</a>
                </div>

                {!!  __('main-page.main-block-6') !!}
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="oracle-tarot">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-6-title') !!}</h2>

                <p class="text-center font-weight-bold">
                    {!!  __('main-page.main-block-6-subtitle') !!}
                </p>

                <div class="row text-center mt-3">
                    <div class="col-6">
                        <h4>{{ __('random-card.taro-title') }}</h4>
                        <div class="text-small">{{ __('random-card.tarot-small') }} </div>
                        <div class="row">
                            <div class="col-6">
                                <p>
                                    <a href="{{ route('daily-card', ['type' => 'tarot-day']) }}" class="btn btn-outline-danger" target="_blank">{{ __('random-card.tarot1') }}</a>
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <a href="{{ route('daily-card', ['type' => 'tarot-advice']) }}" class="btn btn-outline-danger" target="_blank">{{ __('random-card.tarot2') }}</a>
                                </p>
                            </div>
                        </div>

                        <p class="mt-3">
                            <a href="{{ route('daily-card', ['type' => 'tarot-love']) }}" class="btn btn-outline-danger" target="_blank">{{ __('random-card.tarot3') }}</a>
                        </p>
                    </div>
                    <div class="col-6">
                        <h4>{{ __('random-card.lenormand-title') }}</h4>
                        <div class="text-small mb-2">{{ __('random-card.lenormand-small') }}</div>
                        <p>
                            {!! __('random-card.lenormand-intro') !!}
                        </p>
                        <p>
                            <a href="{{ route('daily-card', ['type' => 'lenormand']) }}" class="btn btn-outline-danger mt-3" target="_blank">{{ __('random-card.lenormand') }}</a>
                        </p>
                    </div>

                </div>
                <hr class="divider"/>
            </div>
        </div>

        <div class="row info-block" id="future">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-7-title') !!}</h2>
                {!!  __('main-page.main-block-7') !!}

                {!!  __('main-page.main-block-8') !!}
            </div>
            <div class="col-8">
                {!!  __('main-page.main-block-9') !!}
            </div>
            <div class="col-4 text-center m-auto">
                <img src="{{ asset('images/story.jpg') }}" class="daily-card-img" />
            </div>
        </div>

        <hr class="divider"/>

        <div class="row info-block" id="oracle-runes">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-10-title') !!}</h2>
                    {!!  __('main-page.main-block-10') !!}
                <hr class="divider"/>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col-12">
                <h2>{!! __('main-page.main-block-11-title') !!}</h2>
                <h4>{!! __('main-page.main-block-11-subtitle')  !!}</h4>
                <div class="text-small">{!! __('main-page.main-block-11-small') !!}  </div>
                {!!  __('main-page.main-block-11-text') !!}
            </div>
        </div>
        <div class="mx-auto text-center mb-4 mt-3">
            <a href="{{ route('daily-card', ['type' => 'runes']) }}" class="btn btn-outline-danger" target="_blank">{!! __('main-page.main-block-11-btn') !!}  </a>
        </div>

        <hr class="divider"/>
    </div>

    <img src="{{ asset('images/cat.jpg') }}" style="max-width: 100%" />
@endsection

