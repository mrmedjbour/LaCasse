<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    protected $table = 'daira';
    protected $primaryKey = 'daira_id';
    protected $fillable = [
        'daira_nom',
    ];

    public function wilaya()
    {
        return $this->belongsTo('App\Wilaya', 'wilaya_id');
    }

    public function communes()
    {
        return $this->hasMany('App\Commune', 'daira_id');
    }
}
