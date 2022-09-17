<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJokiRequest;
use App\Http\Requests\UpdateJokiRequest;
use App\Models\Joki;

class JokiController extends Controller
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
     * @param  \App\Http\Requests\StoreJokiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJokiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joki  $joki
     * @return \Illuminate\Http\Response
     */
    public function show(Joki $joki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joki  $joki
     * @return \Illuminate\Http\Response
     */
    public function edit(Joki $joki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJokiRequest  $request
     * @param  \App\Models\Joki  $joki
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJokiRequest $request, Joki $joki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joki  $joki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joki $joki)
    {
        //
    }
}
