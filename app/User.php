<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_prenom', 'user_nom', 'email', 'user_tel', 'password', 'commune_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * methods of class users
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'user_id');
    }

    public function messages()
    {
        return $this->hasMany('App\Message', 'user_id');
    }

    public function annonces()
    {
        return $this->hasMany('App\Annonce', 'user_id');
    }

    public function commune()
    {
        return $this->belongsTo('App\Commune', 'user_id');
    }
}
