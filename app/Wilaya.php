<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $table = 'wilaya';
    protected $primaryKey = 'wilaya_id';

    public function dairas()
    {
        return $this->hasMany('App\Daira', 'wilaya_id');
    }

    public function communes()
    {
        return $this->hasManyThrough('App\Commune', 'App\Daira');
    }
}
