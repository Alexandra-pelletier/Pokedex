<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    /**
     * Association de la table avec le model
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * Association de la clé primaire avec la table
     * @var int
     */
    protected $primaryKey = 'numero';

    // recupération de tous les types du pokemon
    public function types() {
        return $this->belongsToMany('App\Models\Type','pokemon_type','pokemon_numero','type_id');
    }
}
