@extends('template.template')
@include('include.header-background')
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center white-color">Аренда недвижимости в России</h1>
            </div>
        </div>
        <div class="buttons">
            <div class="btn btn-primary order">Сдать</div>
            <div class="btn btn-primary order">Заказать договор</div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="search">
            <div class="search-wrapper">
                <div class="search-left">Снять</div>
                <div class="search-right">
                    @include('include.search-form')
                </div>
            </div>
        </div>
    </div>
    <div class="choice-type-property">
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary btn-lg">
                <input type="radio" name="options" id="option1">Жилая
            </label>
            <label class="btn btn-primary btn-lg">
                <input type="radio" name="options" id="option2">Загородная
            </label>
            <label class="btn btn-primary btn-lg">
                <input type="radio" name="options" id="option3">Коммерческая
            </label>
        </div>
    </div>
    <div class="pop_right-panel">
        <h2>
            Популярные объявления
        </h2>
        <div class="pop">
            <div class="top">
                <div class="top-item">
                    <div class="top-item-img">
                        <a href=""><img src="{{ asset('images/2m.jpg') }}"></a>
                    </div>
                    <div class="right-panel-item-text">
                        <div class="right-panel-item-price">11 000 &#8381;</div>
                        <div class="right-panel-item-description">2-комнатная квартира</div>
                        <div class="right-panel-item-address">ул. Миронова, 21-22</div>
                    </div>
                </div>
                <div class="top-item">
                    <div class="top-item-img">
                        <a href=""><img src="{{ asset('images/2m.jpg') }}"></a>
                    </div>
                    <div class="right-panel-item-text">
                        <div class="right-panel-item-price">11 000 &#8381;</div>
                        <div class="right-panel-item-description">2-комнатная квартира</div>
                        <div class="right-panel-item-address">ул. Миронова, 21-22</div>
                    </div>
                </div>
                <div class="top-item">
                    <div class="top-item-img">
                        <a href=""><img src="{{ asset('images/2m.jpg') }}"></a>
                    </div>
                    <div class="right-panel-item-text">
                        <div class="right-panel-item-price">11 000 &#8381;</div>
                        <div class="right-panel-item-description">2-комнатная квартира</div>
                        <div class="right-panel-item-address">ул. Миронова, 21-22</div>
                    </div>
                </div>
            </div>
            <div class="offers">
                <div class="offers-item">
                    <a href="/"><div class="offer-img offer-first"></div></a>
                    <div class="offer-text">
                        <div class="offer-price">10 000 &#8381;</div>
                        <div class="offer-description">1-комн. 60м2 этаж 7/10</div>
                        <div class="offer-address">ул. Энгельса, 17-46</div>
                        <a href="/"><div class="offer-look">Посмотреть</div></a>
                    </div>
                </div>
                <div class="offers-item">
                    <a href="/"><div class="offer-img offer-second"></div></a>
                    <div class="offer-text">
                        <div class="offer-price">11 000 &#8381;</div>
                        <div class="offer-description">1-комн. 60м2 этаж 7/10</div>
                        <div class="offer-address">ул. Миронова, 21</div>
                        <a href="/"><div class="offer-look">Посмотреть</div></a>
                    </div>
                </div>
                <div class="offers-item">
                    <a href="/"><div class="offer-img offer-third"></div></a>
                    <div class="offer-text">
                        <div class="offer-price">12 000 &#8381;</div>
                        <div class="offer-description">1-комн. 60м2 этаж 7/10</div>
                        <div class="offer-address">ул. Гагарина, 43</div>
                        <a href="/"><div class="offer-look">Посмотреть</div></a>
                    </div>
                </div>
                <div class="offers-item">
                    <a href="/"><div class="offer-img offer-fourth"></div></a>
                    <div class="offer-text">
                        <div class="offer-price">13 000 &#8381;</div>
                        <div class="offer-description">1-комн. 60м2 этаж 7/10</div>
                        <div class="offer-address">ул. Щорса, 34</div>
                        <a href="/"><div class="offer-look">Посмотреть</div></a>
                    </div>
                </div>
            </div>
        </div>
        @include('include.right-panel')
        @include('include.pagination')
    </div>
@endsection
