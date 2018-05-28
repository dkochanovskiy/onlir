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
                    <div class="table-img-a"></div>
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
                    <div class="table-img-b"></div>
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
