@extends('master')

@section('title', 'Continents')

@section('content')
    <p>Modification continent</p>
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
        action="{{ route('continent.update', $continent->id) }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="mb-3">
            <label for="iso_code" class="form-label">Code ISO</label>
            <input type="text" class="form-control" value="{{ $continent->iso_code }}" name="iso_code" id="iso_code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $continent->name }}" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection