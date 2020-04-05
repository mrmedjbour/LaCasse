<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    protected $table = 'modele';
    protected $primaryKey = 'modele_id';
    public $timestamps = false;
    protected $fillable = [
        'modele_nom',
    ];

    public function marque()
    {
        return $this->belongsTo('App\Marque', 'marque_id');
    }
    public function annonces()
    {
        return $this->hasMany('App\Annonce', 'modele_id');
    }
}
