<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepaysRequest;
use App\Http\Requests\UpdatepaysRequest;
use App\Models\pays;
use Illuminate\Support\Facades\DB;

class paysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $pays=pays::all();
        $pays = DB::table('pays')
                ->orderBy('libelePays', 'asc')
                ->get();
        $nbpays = DB::table('pays')
                ->count();
        return view('pays.index', compact('pays', 'nbpays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays=pays::all();
        return view('pays.create', compact('pays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepaysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaysRequest $request)
    {
        $pays= new pays();
        $pays->libelePays=$request->input('libelePays');
        
        $pays->save();
        return redirect()->route('pays.index')->with('info', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show(pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaysRequest  $request
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaysRequest $request, pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(pays $pays)
    {
        
        $pays->delete();
        return back()->with('info', ' supprimé dans la base de données.');
    }
}
