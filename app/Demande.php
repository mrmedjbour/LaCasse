<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $table = 'demande';
    protected $primaryKey = 'dem_id';

    protected $fillable = [
        'dem_doc', 'dem_etat',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client', 'user_id');
    }
}
