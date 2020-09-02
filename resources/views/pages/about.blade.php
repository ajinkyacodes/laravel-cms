@extends('layouts.app')

@section('content')
    {{-- <h1>{{$title}}</h1> --}}
    {{-- We can use {{Blade_syntax}} OR Regular PHP code inside PHP syntax --}}
    <h1><?php echo $title; ?></h1>
    <p>This is about page.</p>
@endsection