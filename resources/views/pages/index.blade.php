@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is a Laravel based CMS created from scratch.</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" roll="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg" roll="button">Register</a>
        </p>
    </div>
@endsection