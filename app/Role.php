<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_id', 'role_nom',
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'role_id');
    }
}
