@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Nouveau pays</p>
    <form 
        action="{{ route('country.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="continent" class="form-label">Continent</label>
            <select class="form-select" name="continent" id="continent">
                @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->name }} ({{ $continent->iso_code }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="iso_code" class="form-label">Code ISO</label>
            <input type="text" class="form-control" name="iso_code" id="iso_code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection