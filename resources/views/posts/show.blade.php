@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-small btn-secondary">Go Back</a>
    <h1 class="mt-3 mb-4">{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection