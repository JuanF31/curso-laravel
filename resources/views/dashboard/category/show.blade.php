@extends('dashboard.layout')
@section('title')
    <title>Dashboard | Detalles Categoria - {{ $category->title }}</title>
@endsection
@section('content')
    <h1>{{ $category->title }}</h1>
    <p>{{ $category->slug }}</p>
@endsection