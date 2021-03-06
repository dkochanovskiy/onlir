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
                            Количество комнат
                        </div>
                        <div class="col-md-1">
                            1
                        </div>
                        <div class="col-md-offset-2 col-md-5">
                            Изолированные
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Количество спальных мест
                        </div>
                        <div class="col-md-1">
                            3
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Общая площадь
                        </div>
                        <div class="col-md-1">
                            50 м <sup>2</sup>
                        </div>
                        <div class="col-md-offset-2 col-md-1">
                            Лоджия
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Жилая площадь
                        </div>
                        <div class="col-md-1">
                            35 м <sup>2</sup>
                        </div>
                        <div class="col-md-offset-2 col-md-3">
                            Меблированная частично
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Кухня
                        </div>
                        <div class="col-md-1">
                            10 м <sup>2</sup>
                        </div>
                        <div class="col-md-offset-2 col-md-3">
                            Есть кухонный гарнитур
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Этаж/этажность
                        </div>
                        <div class="col-md-1">
                            5 из 10
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Лифт
                        </div>
                        <div class="col-md-3">
                            Грузовой и пассажирский
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Ремонт
                        </div>
                        <div class="col-md-3">
                            Дизайнерский
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-3">
                            Можно с детьми
                        </div>
                        <div class="col-md-3">
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