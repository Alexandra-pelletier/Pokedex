<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * Association de la table avec le model
     * @var string
     */
    protected $table = 'type';

    /**
     * Association de la clé primaire avec la table
     * @var int
     */
    protected $primaryKey = 'id';

         // recupération de tous les pokémons associés a un type
        public function pokemon() {
            return $this->belongsToMany('App\Models\Pokemon','pokemon_type','type_id','pokemon_numero');
        }
}
