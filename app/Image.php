<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'img_id';
    public $timestamps = false;
    protected $fillable = [
        'img_nom',
    ];

    public function annonce()
    {
        return $this->belongsTo('App\Annonce', 'annonce_id');
    }
}
