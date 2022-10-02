@extends('master')

@section('title', 'Draws')

@section('content')
    <p>Draw Index</p>
    <ul>
        @foreach ($draws as $draw)
            <li>{{ $draw->drawn_at }} <i>({{ $draw->lottery->name }})</i>
                <ul>
                    @foreach ($draw->drawNumbers as $drawNumber)
                        <li>{{ $drawNumber->number }} ({{ $drawNumber->numberType->name }})</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection