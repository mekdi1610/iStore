<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateorderRequest;
use App\Models\order;
use App\Models\product;
use App\Models\store;
use App\Models\user;
use App\Models\profile;
use App\Models\sale;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardSeller()
    {
        
        $value = Session::get('user');
        $store = store::where('user_id', $value->id)->get()->first();
        $productNo = product::where('store_id', $store->id)->count();
        $products = product::where('store_id', $store->id)->get();
       
        $orders = order::all();
        $sumOrder = 0;
        $sales = sale::all();
       
        foreach($orders as $order){
            foreach($products as $product){
                  if($order->product_id==$product->id && $order->status == 'active'){
                   $sumOrder = $sumOrder+1;
                  
                 
                  }
            }
          
        }
    
        return view('client/seller/index')->with('sumOrders',$sumOrder)->with('productNo', $productNo)->with('users',$value)->with('orders', $orders)->with('products', $products)->with('sales',$sales);
      
    }
}
