<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'msg_id';


    public function messages()
    {
        return $this->belongsTo('App\Discussion', 'disc_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
