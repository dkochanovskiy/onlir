@extends('template.template')

@section('content')
    <div class="container">
        @include('include.navigation-bar')
        <div class="container-content">
            <h4>Телефон</h4>
            <div class="edit-phone">
                <form class="form-horizontal" role="form" id="edit-phone-form">
                    <div class="edit-phone-input">
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
