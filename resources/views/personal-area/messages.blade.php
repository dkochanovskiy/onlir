@extends('template.template')

@section('content')
<div class="container">
    <div class="contacts">
        <div class="contacts-search"></div>
    </div>
    <div class="messages">
        <ul class="chat">
            @foreach($messages as $message)
                <li>
                    <b>{{$message->author}}</b>
                    <p>{{$message->content}}</p>
                </li>
            @endforeach
        </ul>
        <hr>
        <form action="{{ route('messages') }}" method="post">
            {{ csrf_field() }}
            <input type="text" name="author">
            <br><br>
            <textarea style="width: 100%;height:50px" name="content"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>
@endsection
