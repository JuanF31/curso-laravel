@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Detalles Post - {{ $post->title }}</title>
@endsection
@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->posted == 'yes' ? 'Si' : 'No' }}</p>
    <p>{{ $post->description}}</p>
    <div>{!! $post->content !!}</div>
    <img src="{{ asset('/storage/images/1655259924.png') }}" alt="" width="50" >
@endsection