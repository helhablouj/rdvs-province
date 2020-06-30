<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //
    protected $fillable = [
        'nom', 'prenom', 'cnie', 'tel', 'email', 'objet'
    ];
}
