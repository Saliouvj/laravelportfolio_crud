@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h3 class="text-center">Modifier {{$portfolio->nom}}</h3>
        <a href={{route('portfolio.index')}}>Back Portfolio</a>
        <form action={{route('portfolio.update', $portfolio->id)}} method="post" class="w-75 mx-auto" enctype="multipart/form-data">

        @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{$portfolio->titre}}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="filter">Type de projet : </label>
                <select class="form-control  @error('filter') is-invalid @enderror" id="filter" name="filter" value="{{$portfolio->filter}}" >
                    <option value="card">Card</option>
                    <option value="web">Web</option>
                    <option value="app">App</option>
                </select>

                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lien">Lien de l'image</label>
                <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" value="{{$portfolio->lien}}" name="lien">
                @error('lien')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">confirmer</button>
        </form>
    </div>
@endsection
