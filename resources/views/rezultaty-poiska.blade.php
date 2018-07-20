@extends('template.template')

@section('header-background')
@endsection

@section('content')
        <div class="col-md-12 margin-30">
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    @include('include.search-form')
                </div>
            </div>
        </div>
        <div class="">
            <div class="col-md-10">
                <h1>Аренда квартир в Саранске</h1>
                <div class="offers">
                    <div class="col-md-12 offers-item">
                        <a href="/">
                            <div class="offer-img offer-first"></div>
                        </a>
                        <div class="row">
                            <div class="col-md-6 offer-text">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="offer-price">10 000 &#8381;</div>
                                    </div>
                                    <div class="col-md-12">1-комн. 60м2 этаж 7/10</div>
                                    <div class="col-md-12">ул. Энгельса, 17-46</div>
                                    <div class="col-md-12">
                                        <a href="/">
                                            <div class="offer-look">Посмотреть</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 offers-item">
                    <a href="/">
                        <div class="offer-img offer-second"></div>
                    </a>
                    <div class="row">
                        <div class="col-md-6 offer-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="offer-price">10 000 &#8381;</div>
                                </div>
                                <div class="col-md-12">1-комн. 60м2 этаж 7/10</div>
                                <div class="col-md-12">ул. Энгельса, 17-46</div>
                                <div class="col-md-12">
                                    <a href="/">
                                        <div class="offer-look">Посмотреть</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 offers-item">
                    <a href="/">
                        <div class="offer-img offer-third"></div>
                    </a>
                    <div class="row">
                        <div class="col-md-6 offer-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="offer-price">10 000 &#8381;</div>
                                </div>
                                <div class="col-md-12">1-комн. 60м2 этаж 7/10</div>
                                <div class="col-md-12">ул. Энгельса, 17-46</div>
                                <div class="col-md-12">
                                    <a href="/">
                                        <div class="offer-look">Посмотреть</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 offers-item">
                    <a href="/">
                        <div class="offer-img offer-fourth"></div>
                    </a>
                    <div class="row">
                        <div class="col-md-6 offer-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="offer-price">10 000 &#8381;</div>
                                </div>
                                <div class="col-md-12">1-комн. 60м2 этаж 7/10</div>
                                <div class="col-md-12">ул. Энгельса, 17-46</div>
                                <div class="col-md-12">
                                    <a href="/">
                                        <div class="offer-look">Посмотреть</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-panel-wrapper">
                @include('include.right-panel')
            </div>
            @include('include.pagination')
        </div>
@endsection