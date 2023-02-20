<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'nomCandidat' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'niveauEtude' => 'required',
            'niveauEtude' => 'required',
        ]);

        $candidat = new Candidat();
        $candidat->nomCandidat = $request->input('nomCandidat');
        $candidat->prenom = $request->input('prenom');
        $candidat->email = $request->input('email');
        $candidat->age = $request->input('age');
        $candidat->niveauEtude = $request->input('niveauEtude');
        $candidat->sexe = $request->input('sexe');
        $candidat->save();

        $candidat->formations()->attach($request->input('formations'));

        //return redirect("/candidats")->with('flash_message','Candidat enregistré');
        return view('ajoute')->with('flash_message','Candidat enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function repartitionParSexe()
    {
        $candidats_par_sexe = Candidat::select('sexe', DB::raw('count(*) as total'))->groupBy('sexe')->get();

        $labels = $candidats_par_sexe->pluck('sexe');
        $data = $candidats_par_sexe->pluck('total');

        return view('candidat_par_sexe', ['labels' => $labels,'data' => $data,]);
    }

    public function trancheAge()
    {
        $data = DB::table('candidats')->select(DB::raw('COUNT(*) as count, CASE WHEN age BETWEEN 1 AND 10 THEN "0-10" WHEN age BETWEEN 10 AND 20 THEN "10-20" WHEN age BETWEEN 20 AND 30 THEN "20-30" ELSE "36+" END as age_group'))->groupBy('age_group')->get();

        $labels = $data->pluck('age_group');
        $values = $data->pluck('count');

        return view('trancheage', compact('labels', 'values'));
    }
}
