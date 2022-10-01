@extends('master')

@section('title', 'Countries')

@section('content')
    <p>Country Index</p>
    <ul>
        @foreach ($countries as $country)
            <li>{{ $country->name }} <i>({{ $country->iso_code }})</i></li>
        @endforeach
    </ul>
@endsection