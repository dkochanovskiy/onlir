@extends('template.template')

@section('header-background')
@endsection

@section('content')
    @include('include.button-submit-an-announcement')
    <div class="col-md-offset-1 col-md-10" style="margin-bottom: 30px;">
        @include('include.search-form')
    </div>
    <hr class="col-md-12">
    <div class="col-md-12 parrent">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-3">28 июня , 18:30</div>
                        <div class="col-md-6">730 просмотров, 26 за сегодня</div>
                        <div class="col-md-offset-2 col-md-8 ad-photo-contacts-slider">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/question-mark.png') }}">
                        </div>
                        <div class="col-md-9 ad-nickname">
                            valera101@gmail.com
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 margin-30">
                            <div class="row">
                                <div class="col-md-12 header-in-the-form">
                                    Подробное описание
                                </div>
                                <div class="col-md-11 ad-detailed-description">
                                    Сдаётся 2-х комнатная квартира с косметическим ремонтом на длительный срок. Комнаты изолированные, просторные, чистые. Вся мебель и бытовая техника для комфортного проживания присутствует всё современное. Сан.узел раздельный в плитке. Два балкона в комнатах. Рассмотрим всех жильцов. Звоните.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Год постройки
                        </div>
                        <div class="col-md-1">
                            2005
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Тип дома
                        </div>
                        <div class="col-md-1">
                            Кирпичный
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Площадь дома
                        </div>
                        <div class="col-md-2">
                            120 м <sup>2</sup>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Жилая площадь
                        </div>
                        <div class="col-md-2">
                            100 м <sup>2</sup>
                        </div>
                        <div class="col-md-offset-2 col-md-1">
                            Меблированный
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Этажей в доме
                        </div>
                        <div class="col-md-1">
                            2
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Количество комнат
                        </div>
                        <div class="col-md-1">
                            5
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Количество спален
                        </div>
                        <div class="col-md-1">
                            4
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Санузел
                        </div>
                        <div class="col-md-3">
                            В доме
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Площадь участка
                        </div>
                        <div class="col-md-3">
                            100 соток
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Отопление
                        </div>
                        <div class="col-md-3">
                            Центральное газовое
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Ремонт
                        </div>
                        <div class="col-md-3">
                            Косметический
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Можно с детьми
                        </div>
                        <div class="col-md-4">
                            С животными запрещено
                        </div>
                        <div class="col-md-3">
                            Курить запрещено
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-offset-1 col-md-10">
                    <div class="row">
                        <div class="col-md-12 header-in-the-form">
                            Удобства
                        </div>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-12">
                                Холодильник
                            </div>
                            <div class="col-md-offset-1 col-md-12">
                                Телевизор
                            </div>
                            <div class="col-md-offset-1 col-md-12">
                                Посудомоечная машина
                            </div>
                            <div class="col-md-offset-1 col-md-12">
                                Стиральная машина
                            </div>
                            <div class="col-md-offset-1 col-md-12">
                                Интернет
                            </div>
                            <div class="col-md-offset-1 col-md-12">
                                Кондиционер
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-offset-1 col-md-10">
                    <div class="row">
                        <div class="col-md-12 header-in-the-form">
                            На улице(рядом с домом)
                        </div>
                        <div class="col-md-offset-1 col-md-12">
                            Школа
                        </div>
                        <div class="col-md-offset-1 col-md-12">
                            Детский сад
                        </div>
                        <div class="col-md-offset-1 col-md-12">
                            Детская площадка
                        </div>
                        <div class="col-md-offset-1 col-md-12">
                            Парковка
                        </div>
                        <div class="col-md-offset-1 col-md-12">
                            Пандус
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ad-description">
            <div class="row">
                <div class="col-md-12">2-комн. квартира 60м2 7/10 эт</div>
                <div class="col-md-12">Москва, Ул.Энгельса 26</div>
                <div class="col-md-12">М(метро) Пражская , 2 мин. пешком</div>
                <div class="col-md-12"> 28 000 Р / мес.</div>
                <div class="col-md-12">Коммунальные платежи включены</div>
                <div class="col-md-12">Без залога</div>
            </div>
        </div>
    </div>
@endsection