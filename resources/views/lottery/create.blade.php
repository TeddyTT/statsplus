@extends('master')

@section('title', 'Lotterie')

@section('content')
    <p>Nouvelle lotterie</p>
    <form 
        action="{{ route('lottery.store') }}"
        method="POST"
        enctype="multipart/form-data">
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
        <div class="mb-3">
            <label for="operator" class="form-label">Opérateur</label>
            <select class="form-select" name="operator" id="operator">
                @foreach ($operators as $operator)
                    <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection