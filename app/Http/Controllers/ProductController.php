<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return $product;
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
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {       

        $product = new Product;
        //Image
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //    ]);
        //    $name = $request->file('image')->getClientOriginalName();
        //    $path = $request->file('image')->store('public/images');
        //    $product->name = $name;
        //    $product->path = $path;
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->category_id = $request->category_id;
        $product->code = $request->code;
        $product->model = $request->model;
       // $product->image = $request->image;
        $product->store_id = $request->store_id;
        $product->unit_price = $request->unit_price;
        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return product::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
        $product=product::find($request->id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return product::destroy($id);
    }
}
