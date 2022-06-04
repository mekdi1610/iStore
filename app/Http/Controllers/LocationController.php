<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelocationRequest;
use App\Http\Requests\UpdatelocationRequest;
use App\Models\location;

class locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = location::all();
        return $location;
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
     * @param  \App\Http\Requests\StorelocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelocationRequest $request)
    {
        $location = new location;
        $location->country = $request->country;
        $location->city = $request->city;
        $location->street = $request->street;
        $location->save();
        return $location;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return location::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelocationRequest  $request
     * @param  \App\Models\location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelocationRequest $request, location $location)
    {
        //
        $location=location::find($request->id);
        $location->update($request->all());
        return $location;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return location::destroy($id);
    }
}
