<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'msg_id';
    public $timestamps = false;
    protected $fillable = [
        'msg_contenu',
        'msg_stamp',
        'msg_etat',
        'user_id',
        'disc_id',
    ];


    public function messages()
    {
        return $this->belongsTo('App\Discussion', 'disc_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function desc()
    {
        return $this->belongsTo('App\Discussion', 'disc_id');
    }
}
