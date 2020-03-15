<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    protected $table='daira';
    protected $primaryKey='daira_id';
    public function wilaya(){
        return $this->belongsTo('App\Wilaya');
    }
    public function communes(){
        return $this->hasMany('App\Commune' , 'daira_id');
    }
}
