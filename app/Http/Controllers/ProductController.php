<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\store;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

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


        // $request->validate([
        //     'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
        // ]);

        // Save the file locally in the storage/public/ folder under a new folder named /product
        // $newName = "product_".uniqid()."_".$request->file('image');
        // $request->file('image')->storeAs("public/images",$newName);
 // return $request;
      
 if($request->file('image')){
   
    $file= $request->file('image');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(public_path('products'), $filename);
   // return $filename;
    $product->image= $filename;
}
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->category_id = $request->category_id;
        $product->code = $request->code;
        $product->model = $request->model;
       // $product->image = $request->image;
        //$product->store_id = 1;
        $product->unit_price = $request->unit_price;
        $product->save();
        Notification::send('Congrats', 'You\'ve Successfully Registered');
      
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
    public function displayProduct()
    {
        $value = Session::get('user');
        $store = store::where('user_id', $value->id)->get()->first();
        $products = product::where('store_id', $store->id)->get();
        $categories = category::where('store_id', $store->id)->get();
        return view('client/seller/product')->with('products',$products)->with('categories',$categories);
      
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
    public function update(UpdateproductRequest $request)
    {
      
        $product=product::find($request->id);
       
        $product->update($request->all());
        return $product;
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        product::destroy($request->id);
        return redirect()->back();
      
    }
}
