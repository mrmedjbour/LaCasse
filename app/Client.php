<?php

namespace App;

class Client extends User
{
    public function demande()
    {
        return $this->hasOne('App\Demande', 'dem_id');
    }
}
