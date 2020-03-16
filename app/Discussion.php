<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table = 'discussion';
    protected $primaryKey = 'disc_id';

    public function messages()
    {
        return $this->hasMany('App\Message', 'msg_id');
    }

    public function annonce()
    {
        return $this->belongsTo('App\Annonce', 'annonce_id');
    }
}
