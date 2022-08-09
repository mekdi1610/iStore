<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestoreRequest;
use App\Http\Requests\UpdatestoreRequest;
use App\Models\store;
use App\Models\product;
use App\Models\order;
use App\Models\User;
use App\Models\location;
use App\Models\category;
use Illuminate\Support\Facades\Session;

class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = store::all();
        return $store;
    }
    public function displayStore()
    {
        $stores = store::all();   
        $users = user::all();   
        $locations = location::all();
      
        return view('admin/stores')->with('stores',$stores)->with('users', $users)->with('locations', $locations); 
    }
    public function displayProduct($id)
    {
        $value = Session::get('user');
        $products= product::where('category_id', $id)->get();
       
        return view('storeFront/product')->with('products',$products)->with('users', $value); 
    }
    public function displayMainStore()
    {
        $value = Session::get('user');
        $stores = store::all();     
        $locations = location::all();
        $categories = category::all();
        $products = product::all();   
        return view('storeFront/index')->with('stores',$stores)->with('users', $value)->with('locations', $locations)->with('categories', $categories)->with('products', $products); 
 
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
     * @param  \App\Http\Requests\StorestoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestoreRequest $request)
    {
        $store = new store;
        $store->name = $request->name;
        $store->location_id = $request->location_id;
        $store->user_id = $request->user_id;
        $store->status = $request->status;
        $store->save();
        return $store;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\store  $store
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           return store::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(store $store)
    {
        //
    }
    public function getAllProducts($id){
        return product::where('store_id', $id)->get()->first();
    }
        
    public function getOrderList($id){
        $product = $this->getAllProducts($id);
        $order = order::where('product_id',$product->id)->get()->all();
        return $order;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestoreRequest  $request
     * @param  \App\Models\store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestoreRequest $request)
    {
        $store=store::find($request->id);
        $store->update($request->all());
        return $store;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return store::destroy($id);
    }
}
