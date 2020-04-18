<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use SoftDeletes;
    protected $table = 'annonce';
    protected $primaryKey = 'annonce_id';
    public $timestamps = false;
    protected $fillable = [
        'annonce_type',
        'annonce_desc',
        'modele_id',
        'modele_annee',
    ];
    protected $dates = [
        'annonce_date',
    ];

    public function discussions()
    {
        return $this->hasMany('App\Discussion', 'annonce_id');
    }

    public function modele()
    {
        return $this->belongsTo('App\Modele', 'modele_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'annonce_id');
    }

    public function pieces()
    {
        return $this->belongsToMany('App\Piece', 'inclure', 'annonce_id', 'piece_id');
    }
}
