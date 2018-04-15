@extends('template.template')

@section('content')
    <div class="container">
        <div class="btn btn-default order">Заключить договор</div>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form method="post" action="{{ route('welcome')}}" class="form-inline search_form">
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
            <button type="button" class="btn btn-default search_form-input">снять</button>
            <select name="property" class="form-control search_form-input">
                <optgroup label="Жилая">
                    <option>Квартира</option>
                    <option>Комната</option>
                    <option>Дом</option>
                </optgroup>
                <optgroup label="Коммерческая">
                    <option>Офис</option>
                </optgroup>
            </select>
            <select name="room_number" class="form-control search_form-input">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input type="text" value="{{old('min_price')}}" class="form-control search_form-input" name="min_price" id="min_price" placeholder="от">
            <input type="text" value="{{old('max_price')}}" class="form-control search_form-input" name="max_price" id="max_price" placeholder="до">
            <input type="text" value="{{old('city')}}" class="form-control search_form-input" name="city" id="city" placeholder="Город">
            <input type="submit" class="btn btn-default search_form-input" value="Найти" />
        </form>
    </div>
@endsection
