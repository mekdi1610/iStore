<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestockRequest;
use App\Http\Requests\UpdatestockRequest;
use App\Models\stock;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = stock::all();
        return $stock;
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
     * @param  \App\Http\Requests\StorestockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestockRequest $request)
    {
        $stock = new stock;
        $stock->product_id = $request->product_id;
        $stock->balance_quantity = $request->balance_quantity;
        $stock->save();
        return $stock;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return stock::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestockRequest  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestockRequest $request, stock $stock)
    {
        $stock=stock::find($request->id);
        $stock->update($request->all());
        return $stock;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return stock::destroy($id);
    }
}
