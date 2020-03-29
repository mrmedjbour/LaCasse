<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casse extends Model
{
    protected $table = 'casse';
    protected $primaryKey = 'casse_id';
    protected $fillable = [
        'casse_nom', 'casse_image', 'casse_adr', 'casse_loc', 'casse_rc', 'commune_id',
    ];


    public function commune()
    {
        return $this->belongsTo('App\Commune', 'commune_id');
    }

    public function dr()
    {
        return $this->hasOne('App\Dr', 'user_id');
    }

    public function vendeur()
    {
        return $this->hasMany('App\Vendeur', 'user_id');
    }

    public function acheteur()
    {
        return $this->hasMany('App\Acheteur', 'user_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'casse_id');
    }

    public function demande()
    {
        return $this->belongsTo('App\Demande', 'dem_id');
    }
}
