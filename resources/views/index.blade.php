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
        <b><li>{{$message->title}}</li></b>
            <i><strong>{{$message->body}}</strong></i><br>
            <i>{{$message->created_at->diffForHumans()}}</i>
            <hr>
    @endforeach
</ul>

@endsection