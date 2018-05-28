@extends('template.template')

@section('content')
    <div class="container">
        @include('include.navigation-bar')
        <div class="container-content">
            <h3>
                Баланс: 5 рублей
            </h3>
            <br>
            <h3>
                Пополнить:&#160;
                <span class="replenish">
                    100
                </span>&#160;
                &#8381;
            </h3>
            <br>
            <h3>
                Выберите способ оплаты:
            </h3>
        </div>
    </div>
@endsection
