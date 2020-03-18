<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    protected $table = 'piece';
    protected $primaryKey = 'piece_id';

    public function cat()
    {
        return $this->belongsTo('App\PieceCat', 'cat_id');
    }

    public function annonces()
    {
        return $this->belongsToMany('App\Annonce', 'inclure', 'piece _id', 'annonce_id');
    }
}
