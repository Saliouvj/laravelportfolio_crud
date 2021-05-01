@extends('layouts.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section id="fact">
        <h3 class="text-center mb-3">Facts</h3>
        <div class="container">
        @include('layouts.flash')
            <a href={{route('admin.index')}}>Back Admin</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Compteur</th>
                        <th scope="col">Description</th>
                        <th scope="col">Lien Icon</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facts as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->count}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->icon}}</td>
                            <td>
                                <a href={{route('fact.edit', $item->id)}} class="btn btn-primary mb-1">edit</a>
                                <a href={{route('fact.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('fact.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">delete</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <a href={{route('fact.create')}} class="btn btn-success">Ajouter fact</a>
        </div>
    </section>
@endsection
