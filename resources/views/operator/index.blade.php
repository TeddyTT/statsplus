@extends('master')

@section('title', 'Operators')

@section('content')
    <p>Operator Index</p>
    <hr />
    <p><a href="{{ route('operator.create') }}">Créer opérateur</a></p>
    <hr />
    <ul>
        @foreach ($operators as $operator)
            <li>{{ $operator->name }} <i>({{ $operator->short_name }})</i> <a href="{{ route('operator.edit', $operator->id) }}">[modifier]</a>
                <ul>
                    @foreach ($operator->lotteries as $lottery)
                        <li>{{ $lottery->name }}</li>
                    @endforeach
                </ul>
                <form
                        action="{{ route('operator.destroy', $operator->id) }}"
                        method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">[supprimer]</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection