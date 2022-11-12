@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Country Index</p>
    <p><a href="{{ route('country.create') }}">Créer pays</a></p>
    <ul>
        @foreach ($countries as $country)
            <li>{{ $country->name }} <i>({{ $country->iso_code }})</i>
                <ul>
                    @foreach ($country->operators as $operator)
                        <li>{{ $operator->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection