@extends('master')

@section('title', 'Lotteries')

@section('content')
    <p>Lottery Index</p>
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