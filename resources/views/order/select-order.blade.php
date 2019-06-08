@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Заказ консультации</h1>
            <p class="font-weight-light text-center">Выберите тему, которая Вас интересует</p>

            <div class="mt-4 text-center">
                <p>
                    <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Нажмите, чтобы посмотреть подробную инструкцию
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body border border-danger">

                    </div>
                </div>
            </div>


            <div class="accordion" id="layoutsAccordion">
                @foreach($layouts as $layoutGroup)
                    <div class="mt-4"><hr class="divider"/></div>
                    <h3 class="text-center">{{ $layoutGroup[0]->theme->name_ru }}</h3>
                    @foreach($layoutGroup as $layout)
                <div class="card">
                    <div class="card-header" id="heading-{{$layout->id}}">
                        <p class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-{{$layout->id}}" aria-expanded="true" aria-controls="collapse-{{$layout->id}}">
                                {{ $layout->name_ru }}
                                @if($layout->price_uah)
                                    <span class="badge badge-primary badge-pill">{{ $layout->price_uah }} грн</span>
                                @endif
                            </button>
                            <a href="{{ route('order.text-order', $layout) }}" class="btn btn-success float-right">Заказать</a>
                        </p>
                    </div>

                    <div id="collapse-{{$layout->id}}" class="collapse" aria-labelledby="heading-{{$layout->id}}" data-parent="#layoutsAccordion">
                        <div class="card-body">
                            {{ $layout->text_ru }}
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>

@endsection