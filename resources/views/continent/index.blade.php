@extends('master')

@section('title', 'Continents')

@section('content')
    <p>Continent Index</p>
    <hr />
    <p><a href="{{ route('continent.create') }}">Créer continent</a></p>
    <hr />
    <ul>
        @foreach ($continents as $continent)
            <li>{{ $continent->name }} <i>({{ $continent->iso_code }})</i> <a href="{{ route('continent.edit', $continent->id) }}">[modifier]</a>
                <ul>
                    @foreach ($continent->countries as $country)
                        <li>{{ $country->name }}</li> 
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection