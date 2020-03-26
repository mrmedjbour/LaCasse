<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $table = 'marque';
    protected $primaryKey = 'marque_id';
    protected $fillable = [
        'marque_nom',
    ];

    public function modeles()
    {
        return $this->hasMany('App\Modele', 'marque_id');
    }
}
