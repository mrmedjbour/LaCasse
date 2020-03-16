<?php

namespace App;

class Vendeur extends User
{

    public function casse()
    {
        return $this->belongsTo('App\Casse', 'casse_id');
    }
}
