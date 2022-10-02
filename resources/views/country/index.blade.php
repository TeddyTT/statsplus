@extends('master')

@section('title', 'Countries')

@section('content')
    <p>Country Index</p>
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