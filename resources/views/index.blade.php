@extends('master')

@section('title', 'Homepage')

@section('body')


    <h3>Welcome to my Messaging platform</h3>
        <Form class="" action="/create" method="POST">
            <div class="row mb-3">
                <input class="form-control form-control-lg" type="text" name="title" placeholder="Message title please">
                <br><hr>
                <input class="form-control form-control-lg" type="text" name="body" placeholder="message body">
            </div>
    {{csrf_field()}}
    <br><hr>
        <button class="btn btn-success" type="submit">Send message</button>
    </Form>

    <hr>
    <div>
        <h4>Recent Messages for Workers</h4>
    </div>
        <hr>
    <ul>
        @foreach ($messages as $message)
        
        <h3 style="color:red"><i>from...</i>Nurudeen Ajayi</h3>
            <b><li>{{$message->title}}</li></b>
                <i><strong>{{$message->body}}</strong></i><br>
                <i>{{$message->created_at->diffForHumans()}}</i>
                <a href="/message/{{$message->id}}">View Message</a>

                <hr>
        @endforeach
    </ul>

    @endsection