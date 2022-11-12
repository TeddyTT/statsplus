@extends('master')

@section('title', 'Lotterie')

@section('content')
    <p>Lottery Index</p>
    <p><a href="{{ route('lottery.create') }}">Créer lotterie</a></p>
    <ul>
        @foreach ($lotteries as $lottery)
            <li>{{ $lottery->name }}
                <ul>
                    @foreach ($lottery->draws as $draw)
                        <li>{{ $draw->drawn_at }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection