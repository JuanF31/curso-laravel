@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Detalles Post - {{ $post->title }}</title>
@endsection
@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->posted }}</p>
    <p>{{ $post->description}}</p>
    <div>{{ $post->content }}</div>
@endsection