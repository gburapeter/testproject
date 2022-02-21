<?php

namespace App\Http\Controllers;

use App\Models\people_role;
use App\Http\Requests\Storepeople_roleRequest;
use App\Http\Requests\Updatepeople_roleRequest;

class PeopleRoleController extends Controller
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
     * @param  \App\Http\Requests\Storepeople_roleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepeople_roleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people_role  $people_role
     * @return \Illuminate\Http\Response
     */
    public function show(people_role $people_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people_role  $people_role
     * @return \Illuminate\Http\Response
     */
    public function edit(people_role $people_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepeople_roleRequest  $request
     * @param  \App\Models\people_role  $people_role
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepeople_roleRequest $request, people_role $people_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people_role  $people_role
     * @return \Illuminate\Http\Response
     */
    public function destroy(people_role $people_role)
    {
        //
    }
}
