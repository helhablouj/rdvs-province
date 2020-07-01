<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //
    protected $fillable = [
        'nom', 'prenom', 'cnie', 'tel', 'email', 'objet', 'date_heure'
    ];

    public function entite()
    {
        return $this->belongsTo(Entite::class);
    }

    public static $last_booked_rdvs;

    public static function get_last_booked_rdvs()
    {
        if(Rdv::$last_booked_rdvs == null || count(Rdv::$last_booked_rdvs) == 0)
            $last_booked_rdvs = \DB::table('rdvs')->groupBy('entite_id')->latest();
        
        return $last_booked_rdvs;
    }
}
