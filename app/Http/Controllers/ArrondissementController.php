<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArondissementRequest;
use App\Http\Requests\UpdateArondissementRequest;
use App\Models\Arondissement;

class ArrondissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrondissement = Arondissement::all();
        return view('arrondissement.index', compact('arrondissement'));
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
     * @param  \App\Http\Requests\StoreArondissementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArondissementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arondissement  $arondissement
     * @return \Illuminate\Http\Response
     */
    public function show(Arondissement $arondissement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arondissement  $arondissement
     * @return \Illuminate\Http\Response
     */
    public function edit(Arondissement $arondissement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArondissementRequest  $request
     * @param  \App\Models\Arondissement  $arondissement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArondissementRequest $request, Arondissement $arondissement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arondissement  $arondissement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arondissement $arondissement)
    {
        //
    }
}
