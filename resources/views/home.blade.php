@extends('template.template')

@section('content')
<div class="container">
    @include('include.navigation-bar')
    <div class="container-content">
        <div class="container-content-item active" id="active">
            <h3>
                Активные (0)
            </h3>
        </div>
        <div class="container-content-item" id="completed">
            <h3>
                Завершенные (2)
            </h3>
        </div>
        <div class="container-content-content">
            Активных объявлений нет
        </div>
    </div>
</div>
@endsection
