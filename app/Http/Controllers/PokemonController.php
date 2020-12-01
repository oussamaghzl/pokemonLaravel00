<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        $type = type::all();
        
        return view ('pages.home',compact('pokemon','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pokemon = Pokemon::all();
        $type = type::all();
        
        return view ('pages.formulaire',compact('pokemon','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPokemon = new Pokemon;

        $newPokemon->nom = $request->nom;
        $newPokemon->type_id = $request->type_id;
        $newPokemon->image = $request->file('image')->hashName();
        $newPokemon->niveau = $request->niveau;
        $newPokemon->save();

        $request->file('image')->storePublicly('images', 'public');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        
        return view('pages.show',compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);
        $type = Type::all();

        return view('pages.edit',compact('pokemon','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modifPokemon = Pokemon::find($id);

        $modifPokemon->nom = $request->nom;
        $modifPokemon->type_id = $request->type_id;
        $modifPokemon->image = $request->file('image')->hashName();
        $modifPokemon->niveau = $request->niveau;
        $modifPokemon->save();

        $request->file('image')->storePublicly('images', 'public');
        Storage::disk('public')->delete('images/' . $modifPokemon->photo);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SupprPokemon=Pokemon::find($id);

        Storage::disk('public')->delete('images/' . $SupprPokemon->image);

        $SupprPokemon->delete();

        return redirect()->back();
    }
}
