<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rdv extends Model
{
    //
    private static $last_booked_rdvs ;

    protected $fillable = [
        'nom', 'prenom', 'cnie', 'tel', 'email', 'objet', 'date_heure'
    ];

    public function entite()
    {
        return $this->belongsTo(Entite::class);
    }

    public static function insert($dataArray)
    {
        DB::table('rdvs')->insert($dataArray);
    }

    public static function get_last_booked_rdvs()
    {
        if(self::$last_booked_rdvs == null)
        {
            self::$last_booked_rdvs = \DB::table('rdvs')->select('rdvs.entite_id', \DB::raw('MAX(date_heure) as date_heure'))
                                                        ->groupBy('rdvs.entite_id')
                                                        ->get()
                                                        ->pluck('date_heure', 'entite_id')
                                                        ->toArray();
        }
        
        return self::$last_booked_rdvs;
    }

    public static function calculerRdvs($entite_id)
    {
        
        // check the latest rendez vous for the entity
        
        $latest = array_key_exists($entite_id, self::get_last_booked_rdvs()) ? self::get_last_booked_rdvs()[$entite_id] : null;
        
        // if there is no rendez vous, give the first rendez vous an hour from now
        
        // else, first rendez vous slot after latest 
        
        // now how to calculate slots 
        
        $date_heure;
        if($latest != null)
            $date_heure = \Carbon\Carbon::parse($latest);
        else
            $date_heure = \Carbon\Carbon::now();

        $date_heure->addMinutes(15);
        $date_heure->setTimezone('Africa/Casablanca');
        return $date_heure;
    }
}
