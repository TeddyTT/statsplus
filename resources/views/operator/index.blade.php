@extends('master')

@section('title', 'Operators')

@section('content')
    <p>Operator Index</p>
    <ul>
        @foreach ($operators as $operator)
            <li>{{ $operator->name }} <i>({{ $operator->short_name }})</i></li>
        @endforeach
    </ul>
@endsection