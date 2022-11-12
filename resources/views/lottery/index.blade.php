@extends('master')

@section('title', 'Lotterie')

@section('content')
    <p>Lottery Index</p>
    <hr />
    <p><a href="{{ route('lottery.create') }}">Créer lotterie</a></p>
    <hr />
    <ul>
        @foreach ($lotteries as $lottery)
            <li>{{ $lottery->name }} <a href="{{ route('lottery.edit', $lottery->id) }}">[modifier]</a>
                <ul>
                    @foreach ($lottery->draws as $draw)
                        <li>{{ $draw->drawn_at }}</li>
                    @endforeach
                </ul>
                <form
                        action="{{ route('lottery.destroy', $lottery->id) }}"
                        method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">[supprimer]</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection