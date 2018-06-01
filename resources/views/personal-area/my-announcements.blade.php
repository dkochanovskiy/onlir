@extends('template.template')

@section('content')
<div class="container">
    @include('include.navigation-bar')
    <div class="container-content">
        <div class="container-content-title-wrap">
            <div class="container-content-title">
                <a href="javascript:ShowActive()">
                    <h3 class="active" id="active-title">
                        Активные (0)
                    </h3>
                </a>
            </div>
            <div class="container-content-title">
                <a href="javascript:ShowCompleted()">
                    <h3 id="completed-title">
                        Завершенные (2)
                    </h3>
                </a>
            </div>
        </div>
        <div class="container-content-ads">
            <div class="container-content-ads-active" id="ads-active">
                <div class="deleting">
                    <div class="checkbox">
                        <label>
                            <input name="checkbox" type="checkbox" id="checkbox-active">
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
                                        <input type="checkbox" name="checkbox-active">
                                    </label>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class='slide' >
                                <input type="radio" name="slider1" id="slider1_1" checked="checked">
                                <label for="slider1_1"></label>
                                <div><p></p> <img src="{{ asset('images/slider/1.jpg') }}"></div>

                                <input type="radio" name="slider1" id="slider1_2">
                                <label for="slider1_2"></label>
                                <div><p></p> <img src="{{ asset('images/slider/2.jpg') }}"></div>

                                <input type="radio" name="slider1" id="slider1_3">
                                <label for="slider1_3"></label>
                                <div><p></p> <img src="{{ asset('images/slider/3.jpg') }}"></div>

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
                                        <input type="checkbox" name="checkbox-active">
                                    </label>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class='slide' >
                                <input type="radio" name="slider2" id="slider2_1" checked="checked">
                                <label for="slider2_1"></label>
                                <div><p></p> <img src="{{ asset('images/slider/4.jpg') }}"></div>

                                <input type="radio" name="slider2" id="slider2_2">
                                <label for="slider2_2"></label>
                                <div><p></p> <img src="{{ asset('images/slider/5.jpg') }}"></div>

                                <input type="radio" name="slider2" id="slider2_3">
                                <label for="slider2_3"></label>
                                <div><p></p> <img src="{{ asset('images/slider/6.jpg') }}"></div>

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
            <div class="container-content-ads-completed" id="ads-completed">
                <div class="deleting">
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
                                        <input type="checkbox" name="checkbox-completed">
                                    </label>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class='slide' >
                                <input type="radio" name="slider3" id="slider3_1" checked="checked">
                                <label for="slider3_1"></label>
                                <div><p></p> <img src="{{ asset('images/slider/1.jpg') }}"></div>

                                <input type="radio" name="slider3" id="slider3_2">
                                <label for="slider3_2"></label>
                                <div><p></p> <img src="{{ asset('images/slider/2.jpg') }}"></div>

                                <input type="radio" name="slider3" id="slider3_3">
                                <label for="slider3_3"></label>
                                <div><p></p> <img src="{{ asset('images/slider/3.jpg') }}"></div>

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
                                        <input type="checkbox" name="checkbox-completed">
                                    </label>
                                </div>
                            </form>
                        </td>
                        <td>
                            <div class='slide' >
                                <input type="radio" name="slider4" id="slider4_1" checked="checked">
                                <label for="slider4_1"></label>
                                <div><p></p> <img src="{{ asset('images/slider/4.jpg') }}"></div>

                                <input type="radio" name="slider4" id="slider4_2">
                                <label for="slider4_2"></label>
                                <div><p></p> <img src="{{ asset('images/slider/5.jpg') }}"></div>

                                <input type="radio" name="slider4" id="slider4_3">
                                <label for="slider4_3"></label>
                                <div><p></p> <img src="{{ asset('images/slider/6.jpg') }}"></div>

                            </div>
                        </td>
                        <td>
                            <div class="description">
                                <div class="description-top">
                                    <div class="description-top-item">1-ком.</div>
                                    <div class="description-top-item">60м2</div>
                                    <div class="description-top-item">эт7/10</div>
                                    <div class="description-top-item">25000</div>
                                    <div class="description-top-item">23</div>
                                </div>
                                <div class="description-bottom">
                                    <div class="description-bottom-item">Ул.Энгельса 17</div>
                                    <div class="description-bottom-item">8-962-594-38-80</div>
                                </div>
                                <div class="description-additionally">
                                    <div class="description-additionally-item">
                                        Осталось 0 дней
                                    </div>
                                    <div class="description-additionally-item">
                                        <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Редактировать</button>
                                        <button class="btn btn-primary"><span class="glyphicon glyphicon-flash"></span> Активировать</button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        {{--<div class="container-content-content">--}}
            {{--Активных объявлений нет--}}
        {{--</div>--}}
    </div>
</div>
@endsection