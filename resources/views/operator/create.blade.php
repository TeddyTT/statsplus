@extends('master')

@section('title', 'Pays')

@section('content')
    <p>Nouveau opérateur</p>
    <form 
        action="{{ route('operator.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="country" class="form-label">Pays</label>
            <select class="form-select" name="country" id="country">
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }} ({{ $country->iso_code }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="short_name" class="form-label">Nom court</label>
            <input type="text" class="form-control" name="short_name" id="short_name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection