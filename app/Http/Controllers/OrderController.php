<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;
use App\Models\order;
use App\Models\product;
use App\Models\store;
use App\Models\user;
use App\Models\profile;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return $order;
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
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {
        $value = Session::get('user');
        if($value){
        $order = new order;
        $order->product_id = $request->id;
        $order->user_id = $value->id;
        $order->status = "active";
        $order->quantity = $request->quantity;
        $order->save();
        return back()->with('success','Your order was successful!');
      
        }
        else{
            return redirect('/login');
        }
    }
    public function displayOrder()
    {
        
        $value = Session::get('user');
        $store = store::where('user_id', $value->id)->get()->first();
        $products = product::where('store_id', $store->id)->get();
        $orders = order::all();
        $profiles = profile::all();
        return view('client/seller/order')->with('orders',$orders)->with('products', $products)->with('profiles', $profiles);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return order::findOrFail($id);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        //
        $order=order::find($request->id);
        $order->update($request->all());
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return order::destroy($id);
    }
}
