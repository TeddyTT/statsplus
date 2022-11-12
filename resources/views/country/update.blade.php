@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Modification pays</p>
    <div class="pb-8">
        @if ($errors->any())
            Erreurs : 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form 
        action="{{ route('country.update', $country->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="mb-3">
            <label for="continent" class="form-label">Continent</label>
            <select class="form-select" name="continent" id="continent">
                @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}" {{ ($country->continent_id == $continent->id) ? 'selected' : '' }}>{{ $continent->name }} ({{ $continent->iso_code }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="iso_code" class="form-label">Code ISO</label>
            <input type="text" class="form-control" name="iso_code" id="iso_code" value="{{ $country->iso_code }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $country->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection