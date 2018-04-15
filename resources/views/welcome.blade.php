@extends('template.template')

@section('content')
    <div class="container">
        <div class="btn btn-primary order">Заключить договор</div>

        <form method="post" action="{{ route('welcome')}}" class="form-inline search_form">
            {{ csrf_field() }}
            <button type="button" class="btn btn-primary search_form-input">снять</button>
            <select name="property" class="form-control search_form-input">
                <option>Квартира</option>
                <option>Комната</option>
                <option>Дом</option>
            </select>
            <select name="room_number" class="form-control search_form-input">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input type="text" class="form-control search_form-input" name="min_price" id="min_price" placeholder="от">
            <input type="text" class="form-control search_form-input" name="max_price" id="max_price" placeholder="до">
            <input type="text" class="form-control search_form-input" name="city" id="city" placeholder="Город">
            <input type="submit" class="btn btn-success search_form-input" value="Найти" />
        </form>
    </div>
@endsection
