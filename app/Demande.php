<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table = 'demande';
    protected $primaryKey = 'dem_id';
    public $timestamps = false;
    protected $fillable = [
        'dem_doc', 'dem_etat', 'dem_date', 'casse_id'
    ];

//    public function client()
//    {
//        return $this->belongsTo('App\Client', 'user_id');
//    }
    public function casse()
    {
        return $this->hasOne('App\Casse', 'casse_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
