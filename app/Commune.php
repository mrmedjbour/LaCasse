<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'commune';
    protected $primaryKey = 'commune_id';

    public function daira()
    {
        return $this->belongsTo('App\Daira', 'daira_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    public function casses()
    {
        return $this->hasMany('App\Casse', 'casse_id');
    }
}
