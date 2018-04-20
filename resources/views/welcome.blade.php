@extends('template.template')

@section('content')
    <div class="container">
        <div class="title-search">
            <div class="title">
                Аренда недвижимости в России
            </div>
            <div class="buttons">
                <div class="btn btn-default order">Сдать</div>
                <div class="btn btn-default order">Заключить договор</div>
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
                        <form method="post" action="{{ route('welcome')}}" class="form-inline search_form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                            <select name="property" class="form-control">
                                <optgroup label="Жилая">
                                    <option>Квартира</option>
                                    <option>Комната</option>
                                    <option>Дом</option>
                                </optgroup>
                                <optgroup label="Коммерческая">
                                    <option>Офис</option>
                                </optgroup>
                            </select>
                            <select name="room_number" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text" value="{{old('min_price')}}" class="form-control" name="min_price" id="min_price" placeholder="от">
                            <input type="text" value="{{old('max_price')}}" class="form-control" name="max_price" id="max_price" placeholder="до">
                            <input type="text" value="{{old('city')}}" class="form-control" name="city" id="city" placeholder="Город">
                            <input type="submit" class="btn btn-default" value="Найти" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="pop_news">
            <div class="pop">
                <h1>Популярные объявления</h1>
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
            <div class="news">
                <h3>Свежие новости</h3>
                <div class="news-inner">
                    <div class="news-item">
                        <div class="news-title">Новая модель</div>
                        <div class="news-date">17.04.2018</div>
                        <p class="news-text">
                            Не следует, однако забывать, что новая модель организационной деятельности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако
                            забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет
                            оценить значение соответствующий условий активизации. Товарищи! реализация намеченных плановых
                        </p>
                        <a href="/"><div class="news-more">Читать далее</div></a>
                        <div class="news-delimiter"></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title">Идейные соображения</div>
                        <div class="news-date">16.04.2018</div>
                        <p class="news-text">
                            Идейные соображения высшего порядка, а также реализация намеченных плановых заданий
                            представляет собой интересный эксперимент проверки соответствующий условий активизации.
                            Значимость этих проблем настолько очевидна, что новая модель организационной деятельности
                            влечет за собой процесс внедрения и модернизации модели развития. Повседневная практика
                            показывает, что новая модель организационной деятельности представляет собой интересный
                            эксперимент проверки соответствующий условий активизации.
                        </p>
                        <a href="/"><div class="news-more">Читать далее</div></a>
                        <div class="news-delimiter"></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title">Повседневная практика</div>
                        <div class="news-date">15.04.2018</div>
                        <p class="news-text">
                            Повседневная практика показывает, что новая модель организационной деятельности позволяет
                            оценить значение дальнейших направлений развития. Задача организации, в особенности же
                            постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу
                            (специалистов) участие в формировании системы обучения кадров, соответствует насущным
                            потребностям. Разнообразный и богатый опыт рамки и место обучения кадров влечет за собой
                            процесс внедрения и модернизации существенных финансовых и административных условий.
                        </p>
                        <a href="/"><div class="news-more">Читать далее</div></a>
                        <div class="news-delimiter"></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title">Новая модель</div>
                        <div class="news-date">14.04.2018</div>
                        <p class="news-text">
                            Равным образом новая модель организационной деятельности играет важную роль в формировании
                            соответствующий условий активизации. Равным образом сложившаяся структура организации
                            позволяет выполнять важные задания по разработке существенных финансовых и административных
                            условий. Не следует, однако забывать, что укрепление и развитие структуры способствует
                            подготовки и реализации дальнейших направлений развития.
                        </p>
                        <a href="/"><div class="news-more">Читать далее</div></a>
                        <div class="news-delimiter"></div>
                    </div>
                    <div class="news-item">
                        <div class="news-title">Задача организации</div>
                        <div class="news-date">13.04.2018</div>
                        <p class="news-text">
                            Задача организации, в особенности же новая модель организационной деятельности представляет
                            собой интересный эксперимент проверки новых предложений. Разнообразный и богатый опыт
                            укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений
                            прогрессивного развития. Разнообразный и богатый опыт новая модель организационной
                            деятельности способствует подготовки и реализации модели развития. Товарищи! укрепление и
                            развитие структуры играет важную роль в формировании системы обучения кадров, соответствует
                            насущным потребностям.
                        </p>
                        <a href="/"><div class="news-more">Читать далее</div></a>
                        <div class="news-delimiter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
