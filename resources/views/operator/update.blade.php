@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Modification opérateur</p>
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
        action="{{ route('operator.update', $operator->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf   
        @method("PATCH")     
        <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <select class="form-select" name="country" id="country">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}" {{ ($operator->country_id == $country->id) ? 'selected' : '' }}>{{ $country->name }} ({{ $country->iso_code }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="short_name" class="form-label">Nom court</label>
            <input type="text" class="form-control" name="short_name" id="short_name" value="{{ $operator->short_name }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $operator->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection