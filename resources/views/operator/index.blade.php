@extends('master')

@section('title', 'Operators')

@section('content')
    <p>Operator Index</p>
    <p><a href="{{ route('operator.create') }}">Créer opérateur</a></p>
    <ul>
        @foreach ($operators as $operator)
            <li>{{ $operator->name }} <i>({{ $operator->short_name }})</i>
                <ul>
                    @foreach ($operator->lotteries as $lottery)
                        <li>{{ $lottery->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection