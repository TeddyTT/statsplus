@extends('master')

@section('title', 'Continents')

@section('content')
    <p>Nouveau continent</p>
    <form 
        action="{{ route('continent.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
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