<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevillesRequest;
use App\Http\Requests\UpdatevillesRequest;
use App\Models\villes;
use App\Models\pays;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ville=villes::all() ->sortByDesc('libeleVille');
     
        return view('ville.index', compact('ville'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville=villes::all();
        $pays = DB::select('select id, libelePays from pays');
        return view('ville.create', compact('ville', 'pays'));
    }

    public function search(HttpRequest $request, villes $ville)
    {
        $ville=villes::all();
        if (request()->has('search')) {
            $ville->where('libeleVille', 'Like', '%' . request()->input('search') . '%')
            ->orderByAsc('libeleVille');
                        }
            return view('ville.index', compact( 'ville'));
                
            }
        
    
      
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevillesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevillesRequest $request)
    {
        $villes= new villes();
        $villes->pays_id=$request->input('pays_id');
        $villes->libeleVille=$request->input('libeleVille');
        $villes->save();
        return redirect()->route('villes.index')->with('info', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show(villes $villes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit(villes $villes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevillesRequest  $request
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevillesRequest $request, villes $villes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(villes $villes)
    {

        $villes->delete();
        return back()->with('info', ' supprimé dans la base de données.');
    }
}
