@extends('template.template')

@section('content')
<div class="container">
    <div class="title-page">
        <h1>
            Подать объявление в Москве
        </h1>
        <div class="change_city-wrap">
            <div class="btn btn-primary btn-lg change_city">Сменить город</div>
        </div>
    </div>
    <div class="btn btn-primary btn-lg fill_contract">Заполнить договор</div>
    <h2>
        Выберите тип недвижимости
    </h2>
    <div class="property_type">
        <div class="property_type-residential">
            <div class="btn btn-primary btn-lg">Жилая</div>
        </div>
        <div class="property_type-commercial">
            <div class="btn btn-primary btn-lg">Коммерческая</div>
        </div>
    </div>
</div>
@endsection
