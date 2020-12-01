@extends('template.template')

@section('content')
    
    <h1 class="text-center text-white mt-5">Information du Pokemon</h1>

    <div class="row bg-white mx-auto text-center container py-5 px-2">
        <div class="col-8">
            <p>Nom: {{$pokemon->nom}}</p>
            <p>Niveau: {{$pokemon->niveau}}</p>
            <p>Type: {{$pokemon->type->nom}}</p>
        </div>
        <div class="col-4">
            <img src="{{asset('img/' . $pokemon->image)}}" alt="">
        </div>
    </div>

@endsection