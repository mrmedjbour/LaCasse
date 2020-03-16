<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'img_id';

    public function annonce()
    {
        return $this->belongsTo('App\annonce', 'annonce_id');
    }
}
