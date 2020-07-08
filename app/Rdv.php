<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use \Carbon\Carbon as Carbon;

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
            self::$last_booked_rdvs = \DB::table('rdvs')->select('rdvs.entite_id', \DB::raw('MAX(date_heure) as date_heure')) //\DB::raw('COUNT(date_heure) as nombre_rdvs')
                                                        ->groupBy('rdvs.entite_id')
                                                        ->get()
                                                        ->pluck('date_heure', 'entite_id')
                                                        ->toArray();
        }
        
        return self::$last_booked_rdvs;
    }

    public static function calculerRdvs($entite_id)
    {
        $date_heure;
        $latest = Carbon::now();
                                                                                                                          // Why 30 ? needs to be parametered
        if(array_key_exists($entite_id, self::get_last_booked_rdvs()) && Carbon::parse(self::get_last_booked_rdvs()[$entite_id])->subMinutes(30)->isFuture())
        {
            // $date_heure = Carbon::parse(self::get_last_booked_rdvs()[$entite_id]);
            if(EntityCapacityIsFull($entite_id))
                $date_heure = calculateNextRdvSlot($entity_id);
            else
                $date_heure = Carbon::parse(self::get_last_booked_rdvs()[$entite_id]);
        }
         
        
        // now how to calculate slots 
        


        // $date_heure->addMinutes(15);
        $date_heure->setTimezone('Africa/Casablanca');
        return $date_heure;
    }
}
