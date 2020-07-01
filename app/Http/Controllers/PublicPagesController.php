<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Entite;
use App\Rdv;

class PublicPagesController extends Controller
{
    //
    public function index()
    {
        dd(Rdv::get_last_booked_rdvs());
        return view('public.index-b', [
            'entites' => Entite::all(),
        ]);
    }

    public function enregistrerRdvs(Request $request)
    {
        $data = $request->all();
        $data['date_heure'] = \Carbon\Carbon::now();
        
        $entite = Entite::findOrFail($data['entite_id']);
        
        $rdv = new Rdv($data);
        $entite->rdvs()->save($rdv);

        dd(Rdv::get_last_booked_rdvs());
        return redirect()->route('public.index');
    }

}
