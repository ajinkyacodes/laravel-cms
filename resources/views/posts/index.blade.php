@extends('layouts.app')

@section('content')
    <h1 class="mb-3">All Posts</h1>
        @if(count($posts)>0)
            @foreach ($posts as $post)
                <div class="well mb-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <figure>
                                <img src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                            </figure>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3 class="mt-2"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts</p>
        @endif
    
@endsection