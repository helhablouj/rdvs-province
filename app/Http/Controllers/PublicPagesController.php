<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Entite;

class PublicPagesController extends Controller
{
    //
    public function index()
    {
        return view('public.index-b', [
            // 'validation' => 1,
            'entites' => Entite::all(),
            'data' => ['prenom' => 123]
        ]);
    }

    public function enregistrerRdvs(Request $request)
    {
        if(request('saisie') != null)
        {

            return view('public.index-b', [
            'validation' => 1,
            'entites' => Entite::all(),
            'data' => $request->all()
            ]);
        }
        else if(request('validation') != null)
        {
            return 'validé';
        }
        else
            return 'ERREUR SERVEUR';
    }

}
