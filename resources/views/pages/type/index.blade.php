@extends('layouts.main-layout')
@section('head')
    <title>Types</title>
@endsection
@section('content')
    <h1>Types</h1>
    <ul>
        @foreach ($types as $type)
            <li>
                {{ $types -> name }}
            </li>
        @endforeach
    </ul>
@endsection
