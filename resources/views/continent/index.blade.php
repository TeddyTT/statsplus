@extends('master')

@section('title', 'Continents')

@section('content')
    <p>Continent Index</p>
    <ul>
        @foreach ($continents as $continent)
            <li>{{ $continent->name }} <i>({{ $continent->iso_code }})</i>
                <ul>
                    @foreach ($continent->countries as $country)
                        <li>{{ $country->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection