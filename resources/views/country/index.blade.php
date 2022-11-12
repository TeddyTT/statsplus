@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Country Index</p>
    <hr />
    <p><a href="{{ route('country.create') }}">Créer pays</a></p>
    <hr />
    <ul>
        @foreach ($countries as $country)
            <li>{{ $country->name }} <i>({{ $country->iso_code }})</i> <a href="{{ route('country.edit', $country->id) }}">[modifier]</a>
                <ul>
                    @foreach ($country->operators as $operator)
                        <li>{{ $operator->name }}</li>
                    @endforeach
                    <form
                            action="{{ route('country.destroy', $country->id) }}"
                            method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">[supprimer]</button>
                    </form>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection