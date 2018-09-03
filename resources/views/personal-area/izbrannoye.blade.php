@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <div class="deleting">
            <div class="checkbox">
                <label>
                    <input name="checkbox" type="checkbox" id="checkbox-favorites">
                </label>
            </div>
            <button class="btn btn-primary deleting-btn"><span class="glyphicon glyphicon-trash"></span>
                Удалить
            </button>
        </div>
        <table class="table-striped table-bordered table-offer">
            <tr>
                <td>
                    <form role="form">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox-favorites">
                            </label>
                        </div>
                    </form>
                </td>
                <td>
                    <div class="wrapper">
                        <div id="photo1" class="carousel slide" data-ride="carousel">
                            <!--Показатели-->
                            <ol class="carousel-indicators">
                                <li data-target="#photo1" data-slide-to="0" class="active"></li>
                                <li data-target="#photo1" data-slide-to="1"></li>
                                <li data-target="#photo1" data-slide-to="2"></li>
                            </ol>

                            <!--Обертка для слайдов-->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('images/slider/1.jpg') }}" alt="Рисунок песком">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/slider/2.jpg') }}" alt="Рисунок песком">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/slider/3.jpg') }}" alt="Рисунок песком">
                                </div>
                            </div>

                            <!--Элементы управления-->
                            <a class="left carousel-control" href="#photo1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#photo1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
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
                                <input type="checkbox" name="checkbox-favorites">
                            </label>
                        </div>
                    </form>
                </td>
                <td>
                    <div class="wrapper">
                        <div id="photo2" class="carousel slide" data-ride="carousel">
                            <!--Показатели-->
                            <ol class="carousel-indicators">
                                <li data-target="#photo2" data-slide-to="0" class="active"></li>
                                <li data-target="#photo2" data-slide-to="1"></li>
                                <li data-target="#photo2" data-slide-to="2"></li>
                            </ol>

                            <!--Обертка для слайдов-->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('images/slider/1.jpg') }}" alt="Рисунок песком">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/slider/2.jpg') }}" alt="Рисунок песком">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/slider/3.jpg') }}" alt="Рисунок песком">
                                </div>
                            </div>

                            <!--Элементы управления-->
                            <a class="left carousel-control" href="#photo2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#photo2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
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
        </table>
        @include('include.pagination')
    </div>
@endsection
