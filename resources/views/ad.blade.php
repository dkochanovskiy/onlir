@extends('template.template')

@section('header-background')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('include.button-submit-an-announcement')
            <div class="col-md-offset-1 col-md-10" style="margin-bottom: 30px;">
                @include('include.search-form')
            </div>
            <hr>
            <div class="col-md-12 ad-description">
                <div class="col-md-offset-2 col-md-4">
                    <div class="row">
                        <div class="col-md-12">2-комн. квартира 60м2 7/10 эт</div>
                        <div class="col-md-12">Москва, Ул.Энгельса 26</div>
                        <div class="col-md-12">М(метро) Пражская , 2 мин. пешком</div>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-4 ad-description">
                    <div class="row">
                        <div class="col-md-12"> 28 000 Р / мес.</div>
                        <div class="col-md-12">Коммунальные платежи включены</div>
                        <div class="col-md-12">Без залога</div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-12 ad-photo-contacts">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">28 июня , 18:30</div>
                        <div class="col-md-6">730 просмотров, 26 за сегодня</div>
                        <div class="col-md-offset-2 col-md-8 ad-photo-contacts-slider">
                            <div class="slide ad-slide">
                                <input type="radio" name="slider3" id="slider3_1" checked="checked">
                                <label for="slider3_1"></label>
                                <div>
                                    <img class="ad-img-slide" src="{{ asset('images/1.jpg') }}">
                                </div>
                                <input type="radio" name="slider3" id="slider3_2">
                                <label for="slider3_2"></label>
                                <div>
                                    <img class="ad-img-slide" src="{{ asset('images/2l.jpg') }}">
                                </div>
                                <input type="radio" name="slider3" id="slider3_3">
                                <label for="slider3_3"></label>
                                <div><img class="ad-img-slide" src="{{ asset('images/3l.jpg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images/question-mark.png') }}">
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-12 ad-nickname">
                                    valera101@gmail.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 button-submit-an-announcement">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-eye-open"></span> Показать номер
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 button-submit-an-announcement">
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-pencil"></span> Написать сообщение
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 button-submit-an-announcement">
                                    <button type="button" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-thumbs-up"></span> Заключить договор
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2 button-submit-an-announcement">
                                    <button type="button" class="btn btn-success">
                                        <span class="glyphicon glyphicon-star"></span> Добавить в избранное
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection