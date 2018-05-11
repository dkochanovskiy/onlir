@extends('template.template')

@section('content')
    <div class="container">
        <div class="title-search">
            <div class="title">
                Аренда недвижимости в России
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
                        @include('template.search-form')
                    </div>
                </div>
            </div>
        </div>
        <div class="choice-type-property">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default btn-lg">
                    <input type="radio" name="options" id="option1">Жилая
                </label>
                <label class="btn btn-default btn-lg">
                    <input type="radio" name="options" id="option2">Загородная
                </label>
                <label class="btn btn-default btn-lg">
                    <input type="radio" name="options" id="option3">Коммерческая
                </label>
            </div>
        </div>
        <div class="pop_ads-from-realtors">
            <div class="pop">
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
            <div class="ads-from-realtors">
                <h3>Объявления от риэлторов</h3>
                <div class="ads-from-realtors-inner">
                    <div class="ads-from-realtors-item">
                        <div class="ads-from-realtors-title">Новая модель</div>
                        <div class="ads-from-realtors-date">17.04.2018</div>
                        <p class="ads-from-realtors-text">
                            Не следует, однако забывать, что новая модель организационной деятельности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако
                            забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет
                            оценить значение соответствующий условий активизации. Товарищи! реализация намеченных плановых
                        </p>
                        <a href="/"><div class="ads-from-realtors-more">Читать далее</div></a>
                        <div class="ads-from-realtors-delimiter"></div>
                    </div>
                    <div class="ads-from-realtors-item">
                        <div class="ads-from-realtors-title">Идейные соображения</div>
                        <div class="ads-from-realtors-date">16.04.2018</div>
                        <p class="ads-from-realtors-text">
                            Идейные соображения высшего порядка, а также реализация намеченных плановых заданий
                            представляет собой интересный эксперимент проверки соответствующий условий активизации.
                            Значимость этих проблем настолько очевидна, что новая модель организационной деятельности
                            влечет за собой процесс внедрения и модернизации модели развития. Повседневная практика
                            показывает, что новая модель организационной деятельности представляет собой интересный
                            эксперимент проверки соответствующий условий активизации.
                        </p>
                        <a href="/"><div class="ads-from-realtors-more">Читать далее</div></a>
                        <div class="ads-from-realtors-delimiter"></div>
                    </div>
                    <div class="ads-from-realtors-item">
                        <div class="ads-from-realtors-title">Повседневная практика</div>
                        <div class="ads-from-realtors-date">15.04.2018</div>
                        <p class="ads-from-realtors-text">
                            Повседневная практика показывает, что новая модель организационной деятельности позволяет
                            оценить значение дальнейших направлений развития. Задача организации, в особенности же
                            постоянный количественный рост и сфера нашей активности обеспечивает широкому кругу
                            (специалистов) участие в формировании системы обучения кадров, соответствует насущным
                            потребностям. Разнообразный и богатый опыт рамки и место обучения кадров влечет за собой
                            процесс внедрения и модернизации существенных финансовых и административных условий.
                        </p>
                        <a href="/"><div class="ads-from-realtors-more">Читать далее</div></a>
                        <div class="ads-from-realtors-delimiter"></div>
                    </div>
                    <div class="ads-from-realtors-item">
                        <div class="ads-from-realtors-title">Новая модель</div>
                        <div class="ads-from-realtors-date">14.04.2018</div>
                        <p class="ads-from-realtors-text">
                            Равным образом новая модель организационной деятельности играет важную роль в формировании
                            соответствующий условий активизации. Равным образом сложившаяся структура организации
                            позволяет выполнять важные задания по разработке существенных финансовых и административных
                            условий. Не следует, однако забывать, что укрепление и развитие структуры способствует
                            подготовки и реализации дальнейших направлений развития.
                        </p>
                        <a href="/"><div class="ads-from-realtors-more">Читать далее</div></a>
                        <div class="ads-from-realtors-delimiter"></div>
                    </div>
                    <div class="ads-from-realtors-item">
                        <div class="ads-from-realtors-title">Задача организации</div>
                        <div class="ads-from-realtors-date">13.04.2018</div>
                        <p class="ads-from-realtors-text">
                            Задача организации, в особенности же новая модель организационной деятельности представляет
                            собой интересный эксперимент проверки новых предложений. Разнообразный и богатый опыт
                            укрепление и развитие структуры влечет за собой процесс внедрения и модернизации направлений
                            прогрессивного развития. Разнообразный и богатый опыт новая модель организационной
                            деятельности способствует подготовки и реализации модели развития. Товарищи! укрепление и
                            развитие структуры играет важную роль в формировании системы обучения кадров, соответствует
                            насущным потребностям.
                        </p>
                        <a href="/"><div class="ads-from-realtors-more">Читать далее</div></a>
                        <div class="ads-from-realtors-delimiter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
