@extends('template.template')
@section('content')
    @include('include.header-background')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h1 class="main-title white-color">Аренда недвижимости в России</h1>
                    </div>
                </div>
                <div class="row margin-30">
                    <div class="col-md-12">
                        <div class="col-md-offset-5 col-md-1">
                            <a href="{{ route('razmeshcheniye-obyavleniya') }}">
                                <div class="btn btn-primary">Сдать</div>
                            </a>
                        </div>
                        <div class="col-md-1">
                            <div class="btn btn-primary">Заказать договор</div>
                        </div>
                    </div>
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
            </div>
            <div class="col-md-12 margin-30">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        @include('include.search-form')
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin-30">
                <div class="form-group">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary" id="residentialLocation">
                            <input type="radio" name="locationRadio" value="Жилая">Жилая
                        </label>
                        <label class="btn btn-default" id="countrysideLocation">
                            <input type="radio" name="locationRadio" value="Загородная">Загородная
                        </label>
                        <label class="btn btn-default" id="commercialLocation">
                            <input type="radio" name="locationRadio" value="Коммерческая">Коммерческая
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="outputLocation" class="col-md-3 control-label">Расположение</label>
                    <div class="col-md-6">
                        <input type="text" name="outputLocation" class="form-control" id="outputLocation">
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin-30">
                <h2>
                    Популярные объявления
                </h2>
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="top-item-img">
                                            <a href="">
                                                <img src="{{ asset('images/2m.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="right-panel-item-text">
                                            <div class="row">
                                                <div class="col-md-12">11 000 &#8381;</div>
                                                <div class="col-md-12">2-комнатная квартира</div>
                                                <div class="col-md-12">ул. Миронова, 21-22</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="top-item-img">
                                            <a href="">
                                                <img src="{{ asset('images/2m.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="right-panel-item-text">
                                            <div class="row">
                                                <div class="col-md-12">11 000 &#8381;</div>
                                                <div class="col-md-12">2-комнатная квартира</div>
                                                <div class="col-md-12">ул. Миронова, 21-22</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="top-item-img">
                                            <a href="">
                                                <img src="{{ asset('images/2m.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="right-panel-item-text">
                                            <div class="row">
                                                <div class="col-md-12">11 000 &#8381;</div>
                                                <div class="col-md-12">2-комнатная квартира</div>
                                                <div class="col-md-12">ул. Миронова, 21-22</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 margin-30">
                                <h2>
                                    Объявления
                                </h2>
                            </div>
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
                            <div class="col-md-12">
                                @include('include.pagination')
                            </div>
                        </div>
                    </div>
                    @include('include.right-panel')
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
@endsection
