@extends('layout.master')

@section('content')
@include('fragment.subview')
<ul>
    @foreach ($posts as $a)
        <li>{{ $a }}</li>
    @endforeach
</ul>
@endsection