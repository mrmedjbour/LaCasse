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
        'annonce_id',
    ];

    public function msg()
    {
        return $this->hasMany('App\Message', 'disc_id');
    }

    public function ad()
    {
        return $this->belongsTo('App\Annonce', 'annonce_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
