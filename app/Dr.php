<?php

namespace App;

class Dr extends User
{
    public function casse()
    {
        return $this->belongsTo('App\Casse', 'casse_id');
    }
}
