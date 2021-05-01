@extends('layouts.index')

@section('content')
        @include('partial.bo.navAdmin')
        <h1 class="text-center mb-4 mt-3 bg-danger text-light">Administration du site </h1>
        <p class="text-center "> Bienvenu dans le Back Office de votre PortFolio. Enjoy!!!</p>
        <div class="container">
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>About</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-success mx-auto" href={{ route('about.index') }}>Add</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Facts</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-success mx-auto" href={{ route('fact.index') }}>Add</a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Portfolio</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-success mx-auto" href={{ route('portfolio.index') }}>Add</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Service</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-success mx-auto" href={{ route('service.index') }}>Add</a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row mb-2">
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Skills</h4>
                                        </div>
                                        <div class="card-body">
                                        <a class="btn btn-success mx-auto" href={{ route('skill.index') }}>Add</a>
                                        </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="card">
                                        <div class="card-header">
                                                <h4>Mailbox</h4>
                                        </div>
                                        <div class="card-body">
                                                <a class="btn btn-success mx-auto" href={{route('mail.index')}}>Add</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection
