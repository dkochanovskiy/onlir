@extends('template.template')

@section('content')
    <div class="container">
        <div class="row">
            <hr class="col-md-12">
            <div class="col-md-2 text-center">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active" id="home"><a href="{{ route('moi-obyavleniya') }}">Мои объявления</a></li>
                    <li id="purse"><a href="{{ route('koshelek') }}">Кошелек</a></li>
                    <li id="amend-contract"><a href="{{ route('redaktirovaniye-dogovora') }}">Редактирование договора</a></li>
                    <li id="ad-delivery"><a href="{{ route('razmeshcheniye-obyavleniya') }}">Размещение объявления</a></li>
                    <li id="settings"><a href="{{ route('nastroyki') }}">Настройки</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                @include('include.button-submit-an-announcement')
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="container-content-title">
                            <a href="javascript:ShowActive()">
                                <h3 class="active" id="active-title">
                                    Активные (2)
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="container-content-title">
                            <a href="javascript:ShowCompleted()">
                                <h3 id="completed-title">
                                    Завершенные (2)
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="ads-active">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input name="checkbox" type="checkbox" id="checkbox-completed">
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
                </div>
                <div id="ads-completed">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input name="checkbox" type="checkbox" id="checkbox-completed">
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
                </div>
            </div>
        </div><!--row-->
    </div><!--container-->
@endsection
