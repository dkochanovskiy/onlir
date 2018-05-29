@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <table class="table-striped table-bordered table-offer">
            <tr>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="btn btn-primary">
                        Удалить
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <form role="form">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                            </label>
                        </div>
                    </form>
                </td>
                <td>
                    <div class="all">
                        <input checked type="radio" name="respond" id="desktop">
                        <article id="slider">
                            <input checked type="radio" name="slider" id="switch1">
                            <input type="radio" name="slider" id="switch2">

                            <div id="slides">
                                <div id="overflow">
                                    <div class="image">
                                        <article><img src="{{ asset('images/slider/1.jpg') }}"></article>
                                        <article><img src="{{ asset('images/slider/2.jpg') }}"></article>
                                    </div>
                                </div>
                            </div>
                            <div id="controls">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                            </div>
                            <div id="active">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                            </div>
                        </article>
                    </div>
                </td>
                <td>
                    <div class="description">
                        <div class="description-top">
                            <div class="description-top-item">1-ком.</div>
                            <div class="description-top-item">60м2</div>
                            <div class="description-top-item">эт7/10</div>
                            <div class="description-top-item">25000</div>
                        </div>
                        <div class="description-bottom">
                            <div class="description-bottom-item">Ул.Энгельса 17</div>
                            <div class="description-bottom-item">8-962-594-38-80</div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <form role="form">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                            </label>
                        </div>
                    </form>
                </td>
                <td>
                    <div class="table-img"></div>
                </td>
                <td>
                    <div class="description">
                        <div class="description-top">
                            <div class="description-top-item">1-ком.</div>
                            <div class="description-top-item">60м2</div>
                            <div class="description-top-item">эт7/10</div>
                            <div class="description-top-item">25000</div>
                        </div>
                        <div class="description-bottom">
                            <div class="description-bottom-item">Ул.Энгельса 17</div>
                            <div class="description-bottom-item">8-962-594-38-80</div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
@endsection
