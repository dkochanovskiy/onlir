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
                <div class="col-md-offset-1 col-md-11">
                    <div class="row">
                        <div class="col-md-4">
                            Общая площадь
                        </div>
                        <div class="col-md-4">
                            120 м<sup>2</sup>
                        </div>
                        <div class="col-md-4">
                            Меблированна
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Витринные окна
                        </div>
                        <div class="col-md-4">
                            Да
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Ремонт
                        </div>
                        <div class="col-md-4">
                            Косметический
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Электрическая мощность
                        </div>
                        <div class="col-md-4">
                            10 кВт
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Количество мокрых точек
                        </div>
                        <div class="col-md-4">
                            3
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Этаж/этажность
                        </div>
                        <div class="col-md-4">
                            5 из 10
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Лифт
                        </div>
                        <div class="col-md-4">
                            Отсутствует
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Часы работы
                        </div>
                        <div class="col-md-4">
                            с 8:00 до 21:00
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Вход
                        </div>
                        <div class="col-md-4">
                            С улицы
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Тип помещения
                        </div>
                        <div class="col-md-4">
                            Street retail
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Назначение помещения
                        </div>
                        <div class="col-md-8">
                            Все, кроме: табачной продукции, рыбной продукции
                        </div>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="col-md-offset-1 col-md-11">
                    <div class="row">
                        <div class="col-md-12 header-in-the-form">
                            Арендная плата
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Цена в месяц
                        </div>
                        <div class="col-md-4">
                            23.000 &#8381;
                        </div>
                        <div class="col-md-12">
                            включая коммунальные платежи / включая эксплуатационные расходы
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Ставка за м<sup>2</sup>
                        </div>
                        <div class="col-md-4">
                            1.200 &#8381; / месяц
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Предоплата
                        </div>
                        <div class="col-md-4">
                            3 месяца
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Тип аренды
                        </div>
                        <div class="col-md-4">
                            Прямая аренда
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Минимальный срок аренды от
                        </div>
                        <div class="col-md-4">
                            6 месяцев
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Арендные каникулы
                        </div>
                        <div class="col-md-4">
                            Да
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-offset-1 col-md-11">
                    <div class="row">
                        <div class="col-md-4">
                            Название здания
                        </div>
                        <div class="col-md-4">
                            БЦ Вавилон
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Класс здания
                        </div>
                        <div class="col-md-4">
                            -----
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Тип здания
                        </div>
                        <div class="col-md-4">
                            Деловой центр
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Площадь здания
                        </div>
                        <div class="col-md-4">
                            656 м<sup>2</sup>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Отопление
                        </div>
                        <div class="col-md-4">
                            Центральное
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Вентиляция
                        </div>
                        <div class="col-md-4">
                            Отсутствует
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Кондиционирование
                        </div>
                        <div class="col-md-4">
                            Центральное
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-offset-1 col-md-11">
                    <div class="row">
                        <div class="col-md-12 header-in-the-form">
                            Инфраструктура
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Конференц-зал
                        </div>
                        <div class="col-md-4">
                            Салон красоты
                        </div>
                        <div class="col-md-4">
                            Букет
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Банкомат
                        </div>
                        <div class="col-md-4">
                            Аптека
                        </div>
                        <div class="col-md-4">
                            Автомойка
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Кафе
                        </div>
                        <div class="col-md-4">
                            Отделение банка
                        </div>
                        <div class="col-md-4">
                            Автосервис
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Супермаркет
                        </div>
                        <div class="col-md-4">
                            Столовая
                        </div>
                        <div class="col-md-4">
                            Складские помещения
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            Торговый центр
                        </div>
                        <div class="col-md-8">
                            Остановка общественного транспорта
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