@extends('layouts.index')

@section('content')
    @include('partial.bo.navAdmin')
    <section id="mail">
        <h3 class="text-center mb-3">Mail</h3>
        <div class="container">
            <a href={{route('admin.index')}}>Retour Dashboard</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date/Heure</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Sujet</th>
                        <th scope="col">Message</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mails as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->created_at->format('d-M-Y h:i')}}</td>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->mail}}</td>
                            <td>{{$item->sujet}}</td>
                            <td>{{$item->message}}</td>
                            <td>
                                <form action={{route('mail.destroy', $item->id)}} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mb-1">delete</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
