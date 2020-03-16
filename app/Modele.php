<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $table = 'modele';
    protected $primaryKey = 'modele_id';

    protected $fillable = [
        'modele_nom', 'modele_annee', 'marque_id'
    ];

    public function marque()
    {
        return $this->hasOne('App\Marque', 'marque_id');
    }

    public function annonces()
    {
        return $this->hasMany('App\Annonce', 'annonce_id');
    }
}
