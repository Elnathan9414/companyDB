<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use App\Models\Commune;
use App\Models\villes;
use App\Models\pays;
use Illuminate\Support\Facades\DB;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $commune = Commune::all();
        return view('communes.index', compact('commune'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commune = Commune::all();
        $pays = DB::select('select id, libelePays from pays');
        $ville=DB::select('select id, libeleVille from villes');
        return view('communes.create', compact('commune','pays','ville'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommuneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommuneRequest $request)
    {
        $commune= new Commune();
        $commune->pays_id=$request->input('pays_id');
        $commune->ville_id=$request->input('ville_id');
        $commune->libelleCommune=$request->input('libelleCommune');
        $commune->save();
        return redirect()->route('communes.index')->with('info', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function edit(Commune $commune)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommuneRequest  $request
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommuneRequest $request, Commune $commune)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commune $commune)
    {
        
        $commune->delete();
        return back()->with('info', ' supprimé dans la base de données.');
    }
}
