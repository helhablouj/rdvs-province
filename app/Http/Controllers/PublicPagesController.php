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
        return view('public.index-b', [
            'entites' => Entite::all(),
        ]);
    }

    public function enregistrerRdvs(Request $request)
    {
        Rdv::create($request->all());
        return redirect()->route('public.index');
    }

}
