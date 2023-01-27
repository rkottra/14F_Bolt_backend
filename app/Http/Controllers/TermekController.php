<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use App\Http\Requests\StoreTermekRequest;
use App\Http\Requests\UpdateTermekRequest;

class TermekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Termek::all();
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
     * @param  \App\Http\Requests\StoreTermekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTermekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termek  $termek
     * @return \Illuminate\Http\Response
     */
    public function show(Termek $termek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termek  $termek
     * @return \Illuminate\Http\Response
     */
    public function edit(Termek $termek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTermekRequest  $request
     * @param  \App\Models\Termek  $termek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTermekRequest $request, Termek $termek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termek  $termek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termek $termek)
    {
        //
    }
}
