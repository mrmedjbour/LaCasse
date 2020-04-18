<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table = 'discussion';
    protected $primaryKey = 'disc_id';
    public $timestamps = false;
    protected $fillable = [
        'disc_titre',
        'disc_stamp',
        'user_id',
        'annonce_id',
    ];

    protected $hidden = ['laravel_through_key'];

    public function msg()
    {
        return $this->hasMany('App\Message', 'disc_id')->oldest('msg_stamp');
    }

    public function latestmsg()
    {
        return $this->hasOne('App\Message', 'disc_id')->latest('msg_stamp');
    }

    public function ad()
    {
        return $this->belongsTo('App\Annonce', 'annonce_id');
    }

    public function adWithDeleted()
    {
        return $this->belongsTo('App\Annonce', 'annonce_id')->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
