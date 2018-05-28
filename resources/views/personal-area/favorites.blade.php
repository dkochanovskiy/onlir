@extends('template.template')

@section('content')
    <div class="container">
        <hr>
        <table class="">
            <tr>
                <th>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </th>
                <th>
                    <div class="btn btn-primary">
                        Удалить
                    </div>
                </th>
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
                    1
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
                    2
                </td>
            </tr>
        </table>
    </div>
@endsection
