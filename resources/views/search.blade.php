@extends('template.template')

@section('header-background')
@endsection

@section('content')
    <div class="container">
        <div class="search-form-wrapper">
            @include('template.search-form')
        </div>
        <div class="pop_news">
            <div class="pop">
                <h1>Аренда квартир в Саранске</h1>
                <div class="offers">
                    <div class="offers-item">
                        <a href="/"><div class="offer-img offer-first"></div></a>
                        <div class="offer-text">
                            <div class="offer-price">10 000 &#8381;</div>
                            <div class="offer-description">1-комнатная квартира</div>
                            <div class="offer-address">ул. Энгельса, 17-46</div>
                            <a href="/"><div class="offer-look">Посмотреть</div></a>
                        </div>
                    </div>
                    <div class="offers-item">
                        <a href="/"><div class="offer-img offer-second"></div></a>
                        <div class="offer-text">
                            <div class="offer-price">11 000 &#8381;</div>
                            <div class="offer-description">2-комнатная квартира</div>
                            <div class="offer-address">ул. Миронова, 21-22</div>
                            <a href="/"><div class="offer-look">Посмотреть</div></a>
                        </div>
                    </div>
                    <div class="offers-item">
                        <a href="/"><div class="offer-img offer-third"></div></a>
                        <div class="offer-text">
                            <div class="offer-price">12 000 &#8381;</div>
                            <div class="offer-description">3-комнатная квартира</div>
                            <div class="offer-address">ул. Гагарина, 43-33</div>
                            <a href="/"><div class="offer-look">Посмотреть</div></a>
                        </div>
                    </div>
                    <div class="offers-item">
                        <a href="/"><div class="offer-img offer-fourth"></div></a>
                        <div class="offer-text">
                            <div class="offer-price">13 000 &#8381;</div>
                            <div class="offer-description">4-комнатная квартира</div>
                            <div class="offer-address">ул. Щорса, 34-85</div>
                            <a href="/"><div class="offer-look">Посмотреть</div></a>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.right-panel')
        </div>
    </div>
@endsection