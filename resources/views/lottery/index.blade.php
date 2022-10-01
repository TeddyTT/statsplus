@extends('master')

@section('title', 'Lotteries')

@section('content')
    <p>Lottery Index</p>
    <ul>
        @foreach ($lotteries as $lottery)
            <li>{{ $lottery->name }}</li>
        @endforeach
    </ul>
@endsection