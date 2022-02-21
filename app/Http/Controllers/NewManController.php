<?php

namespace App\Http\Controllers;

use App\Models\NewMan;
use App\Http\Requests\StoreNewManRequest;
use App\Http\Requests\UpdateNewManRequest;

class NewManController extends Controller
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
     * @param  \App\Http\Requests\StoreNewManRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewManRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewMan  $newMan
     * @return \Illuminate\Http\Response
     */
    public function show(NewMan $newMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewMan  $newMan
     * @return \Illuminate\Http\Response
     */
    public function edit(NewMan $newMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewManRequest  $request
     * @param  \App\Models\NewMan  $newMan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewManRequest $request, NewMan $newMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewMan  $newMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewMan $newMan)
    {
        //
    }
}
