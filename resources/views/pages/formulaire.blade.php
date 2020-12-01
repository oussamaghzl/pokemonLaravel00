@extends('template.template')

@section('content')
    
    <h1 class="text-center text-white mt-5">Bienvenue dans le pokedex</h1>


    <form action="/creation-pokemon" method="POST" enctype="multipart/form-data">
        @csrf

        <h2 class="titre2 text-white text-center">Creation Pokemon</h2>

        <div class="container bg-white px-5 py-4 mt-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Nom</label>
                    <input type="text" value="{{old('nom')}}" class="form-control" id="inputCity" name="nom">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCity">Niveau</label>
                    <input type="number" value="{{old('age')}}" class="form-control" id="inputCity" name="niveau">
                </div>
                
            </div>
            
            <div class="form-row">
                
                <div class="form-group mx-3">
                <label for="inputState">Quelle est le type de votre pokemon</label>
                <select id="inputState" class="form-control" value="{{old('equipes_id')}}" name="type_id">
                    <option selected active>Type Pokemon</option>
                    @foreach ($type as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
                </select>
                </div>

            
            <div class="form-group mx-5 pt-4">
              <label for="imagee">Photo du pokemon</label>
              <input type="file" name="image" id="imagee">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Envoie</button>

    </div>
    

    </form>
@endsection