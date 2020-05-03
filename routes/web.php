<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


// route pour la page d'accueil
$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

// Route pour gérer la page détail
$router->get(
    '/pokemonDetail/{numero}',
    [
        'uses' => 'PokemonController@detail',
        'as' => 'pokemon-detail'
    ]
);

// route pour gerer la page listant les differents types de pokémons
$router->get(
    '/type',
    [
        'uses' => 'TypeController@list',
        'as' => 'types-list'
    ]
 );

 // route pour gerer les pages spécifiques à un un type
 $router->get(
     '/type/{id}',
     [
         'uses' => 'TypeController@general',
         'as' => 'types-general'
     ]
     );
