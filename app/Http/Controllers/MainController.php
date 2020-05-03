<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;


class MainController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /
     */
    public function home() {

        $pokemons = Pokemon::all();
        //dump($pokemons);


        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'main.home',
            // Données à transmettre à la View
            [
                'pokemons' => $pokemons
            ]
        );
    }
}
