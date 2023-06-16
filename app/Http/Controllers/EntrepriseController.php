<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreentrepriseRequest;
use App\Http\Requests\UpdateentrepriseRequest;
use App\Models\entreprise;
use App\Models\pays;
use App\Models\villes;
use App\Models\Commune;
use App\Models\Secteur;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //     //return view('entreprise.index');
    //    $entreprise = entreprise::all();
    //     return view('entreprise.index', compact('entreprise'));
    public function index()
{
    $entreprise = DB::table('entreprises')
                ->orderBy('nomEntreprise', 'asc')
                ->get();
    return view('entreprise.index', compact( 'entreprise'));
        
    }

    public function ville()

    {
        $requette = "select *from entreprise";
        $entreprise = DB::table('entreprises')
                    ->orderBy('nomEntreprise', 'asc')
                    ->get();
        return view('entreprise.selectville', compact( 'entreprise'));
            
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $entreprise = entreprise::all();
        $pays = DB::select('select id, libelePays from pays');
        $ville=DB::select('select id, libeleVille from villes');
        $commune=DB::select('select id, libelleCommune from communes');
        $secteur=DB::select('select id, libelleSecteur from secteurs');
        return view('entreprise.create', compact('entreprise','pays','ville','commune','secteur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreentrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreentrepriseRequest $request)
    {
        $entreprise= new entreprise();
        $entreprise->nomEntreprise=$request->input('nomEntreprise');
        $entreprise->sigle=$request->input('sigle');
        $entreprise->quartier=$request->input('quartier');
        $entreprise->lieuDit=$request->input('lieuDit');
        $entreprise->adresse=$request->input('adresse');
        $entreprise->telephoneEntreprise=$request->input('telephoneEntreprise');
        $entreprise->emailEntreprise=$request->input('emailEntreprise');
        $entreprise->nomResponsable=$request->input('nomResponsable');
        $entreprise->tireResponsable=$request->input('tireResponsable');
        $entreprise->contactResponsable=$request->input('contactResponsable');
        $entreprise->emailresponsable=$request->input('emailresponsable');
        $entreprise->tailleEntreprise=$request->input('tailleEntreprise');
        $entreprise->siteWeb=$request->input('siteWeb');
        $entreprise->facebook=$request->input('facebook');
        $entreprise->instagram=$request->input('instagram');
        $entreprise->linkedin=$request->input('linkedin');
        $entreprise->pays_id=$request->input('pays_id');
        $entreprise->ville_id=$request->input('ville_id');
        $entreprise->commune_id=$request->input('commune_id');
        $entreprise->secteur_id=$request->input('secteur_id');
        
        $entreprise->save();
        return redirect()->route('entreprise.index')->with('info', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(entreprise $entreprise)
    {
        $pays = DB::select('select id, libelePays from pays');
        $ville=DB::select('select id, libeleVille from villes');
        $commune=DB::select('select id, libelleCommune from communes');
        $secteur=DB::select('select id, libelleSecteur from secteurs');
        return view('entreprise.show', compact('entreprise','pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateentrepriseRequest  $request
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateentrepriseRequest $request, entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(entreprise $entreprise)
    {
        //
    }
}
