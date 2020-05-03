<?php

namespace App\Http\Controllers;

use App\Models\Type;

class TypeController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /
     */
    public function list() {

        $type = Type::all();
        //dump($pokemons);


        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'types.list',
            // Données à transmettre à la View
            [
                'type' => $type
            ]
        );
    }

    public function general($id) {

        $currentType = Type::find($id)->load('pokemon');
        //dump($currentType);exit;

        return view(
            // Nom de la View dans /resources/views
            // => /resources/views/main/home.php
            'types.general',
            // Données à transmettre à la View
            [
                'currentType' => $currentType
            ]
        );
    }
}
