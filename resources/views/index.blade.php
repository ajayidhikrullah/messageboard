@extends('master')

@section('title', 'Homepage')

@section('body')

<h3>Welcome to my Messaging platform</h3>

<Form action="/create" method="POST">
    <input type="text" name="title" placeholder="Message title please">
    <br><hr>
    <input type="text" name="body" placeholder="message body">
{{csrf_field()}}
<br><hr>
    <button type="submit">Submit</button>
</Form>

<hr>

<h4>Recent Messages</h4>
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