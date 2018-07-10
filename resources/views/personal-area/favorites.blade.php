@extends('template.template')

@section('content')
    <div class="container">
        <hr class="col-md-12">
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
                    <div class="slide">
                        <input type="radio" name="slider1" id="slider1_1" checked="checked">
                        <label for="slider1_1"></label>
                        <div>
                            <img src="{{ asset('images/slider/1.jpg') }}">
                        </div>
                        <input type="radio" name="slider1" id="slider1_2">
                        <label for="slider1_2"></label>
                        <div>
                            <img src="{{ asset('images/slider/2.jpg') }}">
                        </div>
                        <input type="radio" name="slider1" id="slider1_3">
                        <label for="slider1_3"></label>
                        <div>
                            <img src="{{ asset('images/slider/3.jpg') }}">
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
                    <div class='slide' >
                        <input type="radio" name="slider2" id="slider2_1" checked="checked">
                        <label for="slider2_1"></label>
                        <div>
                            <img src="{{ asset('images/slider/4.jpg') }}">
                        </div>
                        <input type="radio" name="slider2" id="slider2_2">
                        <label for="slider2_2"></label>
                        <div>
                            <img src="{{ asset('images/slider/5.jpg') }}">
                        </div>
                        <input type="radio" name="slider2" id="slider2_3">
                        <label for="slider2_3"></label>
                        <div>
                            <img src="{{ asset('images/slider/6.jpg') }}">
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
