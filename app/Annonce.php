<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table = 'annonce';
    protected $primaryKey = 'annonce_id';
    protected $fillable = [
        'annonce_type',
        'annonce_desc',
        'modele_id',
        'modele_annee',
    ];

    public function discussions()
    {
        return $this->hasMany('App\Discussion', 'disc_id');
    }

    public function modele()
    {
        return $this->belongsTo('App\modele', 'modele_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'img_id');
    }

    public function pieses()
    {
        return $this->belongsToMany('App\Piece', 'inclure', 'annonce_id', 'piece_id');
    }
}
