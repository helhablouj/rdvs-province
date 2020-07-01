<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entite extends Model
{
    //

    public function rdvs()
    {
        return $this->hasMany(Rdv::class);
    }
}
