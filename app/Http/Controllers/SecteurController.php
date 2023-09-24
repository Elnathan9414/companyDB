<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSecteurRequest;
use App\Http\Requests\UpdateSecteurRequest;
use App\Models\Secteur;
use Illuminate\Support\Facades\DB;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteur = DB::table('secteurs')
                ->orderBy('libelleSecteur', 'asc')
                ->get();
        return view('secteur.index', compact('secteur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $secteur=Secteur::all();
        return view('secteur.create', compact('secteur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecteurRequest $request)
    {
        $secteur= new Secteur();
        $secteur->libelleSecteur=$request->input('libelleSecteur');
        $secteur->description=$request->input('description');
        $secteur->save();
        return redirect()->route('secteurs.index')->with('info', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function show(Secteur $secteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Secteur $secteur)
    {
        //$secteur=Secteur::all();
        return view('secteur.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecteurRequest  $request
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecteurRequest $request, Secteur $secteur)
    {
        $secteur->update($request->all());
        return redirect()->route('secteur.index')->with('info', 'La déclaration a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secteur  $secteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secteur $secteur)
    {
        //
    }
}
