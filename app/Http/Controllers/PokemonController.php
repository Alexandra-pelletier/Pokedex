<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;

class PokemonController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /pokemonDetail/{id}
     */
    public function detail($id) {

        // On recupere les données spécifique a un pokemon
        $pokemonData = Pokemon::find($id)->load('types');
        //dump($pokemonData);


        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'pokemon.detail',
            // Données à transmettre à la View
            [
                'pokemonData' => $pokemonData
            ]
        );
    }
}
