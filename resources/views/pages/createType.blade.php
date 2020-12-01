@extends('template.template')

@section('content')
    
    <h1 class="text-center text-white mt-5">Bienvenue dans le pokedex</h1>


    <form action="/creation-type" method="POST" enctype="multipart/form-data">
        @csrf

        <h2 class="titre2 text-white text-center">Creation type de Pokemon</h2>

        <div class="container bg-white px-5 py-4 mt-5">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">type</label>
                    <input type="text" value="{{old('nom')}}" class="form-control" id="inputCity" name="nom">
                </div>
            </div>
          <button type="submit" class="btn btn-primary">Envoie</button>

    </div>
    

    </form>
@endsection