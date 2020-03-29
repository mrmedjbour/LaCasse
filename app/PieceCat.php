<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PieceCat extends Model
{
    protected $table = 'piece_categorie';
    protected $primaryKey = 'cat_id';
    protected $fillable = [
        'cat_nom',
    ];

    public function pieces()
    {
        return $this->hasMany('App\Piece', 'cat_id');
    }
}
