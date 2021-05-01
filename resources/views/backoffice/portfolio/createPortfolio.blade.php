@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h3 class="text-center">Ajouter un Projet</h3>
        <a href={{route('admin.index')}} class="text-center">Back admin</a>
        <form action={{ route('portfolio.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="form-group">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre') }}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="filter">Type de projet : </label>
                <select class="form-control  @error('filter') is-invalid @enderror" id="filter" name="filter" value="{{ old('filter') }}" >
                    <option selected>Choisissez le type de projet</option>
                    <option value="card">Card</option>
                    <option value="web">Web</option>
                    <option value="app">App</option>
                </select>
                {{-- <input type="text" class="form-control  @error('filter') is-invalid @enderror" id="filter" value="{{ old('filter') }}" name="filter"> --}}
                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lien">Lien de l'image</label>
                <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" value="{{ old('lien') }}" name="lien">
                @error('lien')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Confirmer</button>
        </form>
    </div>
@endsection
