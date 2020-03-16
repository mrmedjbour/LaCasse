<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    protected $table = 'piece';
    protected $primaryKey = 'piece_id';

    public function categorie()
    {
        return $this->belongsTo('App\Piece_categorie', 'cat_id');
    }

    public function anonces()
    {
        return $this->belongsToMany('App\Annonce', 'inclure', 'piece _id', 'annonce_id');
    }
}
