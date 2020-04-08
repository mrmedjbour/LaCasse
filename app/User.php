<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_prenom', 'user_nom', 'email', 'user_tel', 'password', 'role_id', 'commune_id', 'casse_id', 'last_online',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_online' => 'datetime',
        'user_tel' => 'array',
    ];

    /**
     * methods of class users
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function annonces()
    {
        return $this->hasMany('App\Annonce', 'user_id');
    }

    public function images()
    {
        return $this->hasManyThrough(
            'App\Image',
            'App\Annonce',
            'user_id',
            'annonce_id',
            'user_id',
            'annonce_id'
        );
    }

    public function casse()
    {
        return $this->belongsTo('App\Casse', 'casse_id');
    }

    public function demande()
    {
        return $this->hasOne('App\Demande', 'user_id');
    }

    public function demandes()
    {
        return $this->hasMany('App\Demande', 'user_id');
    }

    public function commune()
    {
        return $this->belongsTo('App\Commune', 'commune_id');
    }

    public function desc()
    {
        return $this->hasMany('App\Discussion', 'user_id');
    }

    public function isOnline()
    {
        return $this->last_online <= Carbon::now()->addMinutes(5);
    }
}
