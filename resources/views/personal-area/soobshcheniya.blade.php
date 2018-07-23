@extends('template.template')

@section('content')

    <div class="col-md-offset-1 col-md-10 contacts-messages">
        <div class="row">
            <div class="col-md-5">
                <div class="contacts-inner">
                    <div class="contacts-inner-item" id="c1">
                        ivan
                    </div>
                    <div class="contacts-inner-item" id="c2">
                        petrov
                    </div>
                    <div class="contacts-inner-item" id="c3">
                        oleg
                    </div>
                    <div class="contacts-inner-item" id="c4">
                        kotin
                    </div>
                    <div class="contacts-inner-item" id="c5">
                        sergey
                    </div>
                    <div class="contacts-inner-item" id="c6">
                        valera
                    </div>
                    <div class="contacts-inner-item" id="c7">
                        anton
                    </div>
                    <div class="contacts-inner-item" id="c8">
                        kirill
                    </div>
                    <div class="contacts-inner-item" id="c9">
                        mefodiy
                    </div>
                    <div class="contacts-inner-item" id="c10">
                        igor
                    </div>
                    <div class="contacts-inner-item" id="c11">
                        vasilevs
                    </div>
                    <div class="contacts-inner-item" id="c12">
                        artem
                    </div>
                    <div class="contacts-inner-item" id="c13">
                        ibragim
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="messages-inner">
                    <div class="messages-inner-caption">
                        ivan
                    </div>
                    <div class="messages-inner-chat">
                        <div class="messages-inner-date">
                            22 МАЯ 2018 Г.
                        </div>
                        <div class="messages-inner-chat-wrap">
                            <div class="messages-inner-chat-wrap-item messages-inner-incomming">
                                За сколько сдадите квартиру?
                            </div>
                        </div>
                        <div class="messages-inner-chat-wrap">
                            <div class="messages-inner-chat-wrap-item messages-inner-outgoing">
                                Привет, цена не изменится
                            </div>
                        </div>
                        <div class="messages-inner-chat-wrap">
                            <div class="messages-inner-chat-wrap-item messages-inner-incomming">
                                Спасибо
                            </div>
                        </div>
                    </div>
                    <div class="messages-inner-write-message">
                        <form action="" method="post">
                            <textarea class="form-control" rows="1" placeholder="Написать сообщение ..."></textarea>
                            <button type="submit" class="btn btn-primary ">
                                <span class="glyphicon glyphicon-send"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
