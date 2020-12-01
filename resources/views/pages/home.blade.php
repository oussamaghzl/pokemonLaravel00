@extends('template.template')

@section('content')
    
    <h1 class="text-center text-white mt-5">Bienvenue dans le pokedex</h1>

    <h2 class="text-center text-white">Listes des pokemons disponible</h2>

    <table class="table container mx-auto text-center ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Nom</th>
            <th scope="col">Niveau</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pokemon as $item)
                <tr class="bg-white">
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->niveau}}</td>
                    <td>{{$item->type->nom}}</td>
                    <td>
                        <div class="row">
                            <button class="btn btn-primary ">
                                <a class="text-white" href="/edit/{{$item->id}}">Edit</a>
                            </button>
    
                            <button class="btn btn-success mx-3">
                                <a class="text-white" href="/show/{{$item->id}}">Information</a>
                            </button>
    
                            <form action="/suppr/{{$item->id}}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
          
        </tbody>
      </table>
      
@endsection