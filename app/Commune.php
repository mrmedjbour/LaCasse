<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'commune';
    protected $primaryKey = 'commune_id';
    public $timestamps = false;
    protected $fillable = [
        'commune_nom',
    ];

    public function daira()
    {
        return $this->belongsTo('App\Daira', 'daira_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'commune_id');
    }

    public function casses()
    {
        return $this->hasMany('App\Casse', 'casse_id');
    }
}
