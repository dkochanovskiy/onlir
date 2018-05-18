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
    {{--<input type="submit" class="btn btn-default" value="Найти" />--}}
    <a href="/search"><div class="btn btn-default">Найти</div></a>
</form>