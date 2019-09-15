@extends('layout.main')
<div class="container top-container">
    <div class="row">
        <div class="col-6">
            <div class="top-block">
                <h1 class="display-3 logo">{{ trans('menu.name') }}</h1>
                <p class="lead font-weight-bold">
                    {!!  __('main-page.top-block-1') !!}
                </p>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0 font-weight-bold">
                        {!!  __('main-page.top-block-2') !!}
                    </p>
                    <p class="font-weight-bold mt-0">Информация Вашего заказа конфиденциальна</p>
                </div>
                <div class="top-block-buttons row">
                    <div class="col-6  text-center">
                        <a href="{{ route('dashboard.order.index') }}" class="btn btn-outline-danger font-weight-bold">{!!  __('main-page.top-block-btn1') !!}</a>
                    </div>
                    <div class="col-6  text-center">
                        <a href="{{ route('dashboard.order.index') }}" class="btn btn-outline-danger font-weight-bold">{!!  __('main-page.top-block-btn2') !!}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <img src="{{ asset('images/top-img.gif') }}" />
        </div>
    </div>
</div>
@section('content')

    <div class="main-content">

        <hr class="divider"/>

        <div class="row info-block">
            <div class="col-12 text-justify">
                {!!  __('main-page.main-block-1') !!}
            </div>
        </div>


        <div class="row info-block">
            <div class="col-12">
                <h2 class="text-justify">{!!  __('main-page.main-block-2-title') !!} </h2>
                <p>
                    {!!  __('main-page.main-block-2') !!}
                </p>
                <div class="mx-auto">
                    <a href="{{ route('order.index') }}" class="btn btn-outline-danger">Заказать КОНСУЛЬТАЦИЮ НА КАРТАХ</a>
                </div>
            </div>
        </div>

        <div class="row info-block">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-3-title') !!}</h2>
                <p class="text-center font-weight-light">
                    {!!  __('main-page.main-block-3') !!}
                </p>
            </div>
        </div>

        <div class="row info-block">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <blockquote class="blockquote mb-0">
                            <p>{!!  __('main-page.main-block-4') !!}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="row info-block" id="tarot">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-5-title') !!}</h2>
                {!!  __('main-page.main-block-5') !!}
            </div>
        </div>

        <div class="row info-block" id="lenorman">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-6-title') !!}</h2>

                <p class="text-center font-weight-light">
                    {!!  __('main-page.main-block-6-subtitle') !!}
                </p>

                {!!  __('main-page.main-block-6') !!}

                <hr class="divider"/>
            </div>
        </div>

        <div class="row info-block" id="future">
            <div class="col-12">
                <h2 class="text-center">{!!  __('main-page.main-block-7-title') !!}</h2>

                {!!  __('main-page.main-block-7') !!}

                {!!  __('main-page.main-block-8') !!}

                {!!  __('main-page.main-block-9') !!}

                <hr class="divider"/>
            </div>
        </div>
    </div>


@endsection

