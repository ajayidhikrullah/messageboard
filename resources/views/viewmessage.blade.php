<h3>Welcome to my Messaging platform</h3>

@extends('master')

@section('title', $message->title)


@section('body')
    <h3>{{$message->title}}</h3>
    <p>{{$message->body}}</p>
@endsection