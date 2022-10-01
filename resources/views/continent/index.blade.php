@extends('master')

@section('title', 'Continents')

@section('content')
    <p>Continent Index</p>
    <ul>
        @foreach ($continents as $continent)
            <li>{{ $continent->name }} <i>({{ $continent->iso_code }})</i></li>
        @endforeach
    </ul>
@endsection