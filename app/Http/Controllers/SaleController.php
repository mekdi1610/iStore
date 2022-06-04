<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresaleRequest;
use App\Http\Requests\UpdatesaleRequest;
use App\Models\sale;

class saleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = sale::all();
        return $sale;
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
     * @param  \App\Http\Requests\StoresaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresaleRequest $request)
    {
        $sale = new sale;
        $sale->order_id = $request->order_id;
        $sale->save();
        return $sale;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return sale::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesaleRequest  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesaleRequest $request, sale $sale)
    {
        $sale=sale::find($request->id);
        $sale->update($request->all());
        return $sale;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return sale::destroy($id);
    }
}
