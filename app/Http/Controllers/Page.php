<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route  ;

class Page extends Controller
{
    function home(){
        $request=Request::create('api/v1/product','GET');
        $response =  Route::dispatch($request);
      
        $data = json_decode($response->getContent(), true);
         
        return view('page.home',["data"=>$data['data']]);
    }


    function detail($id){
        $request=Request::create(sprintf('api/v1/product/%u',$id),'GET');
        $response =  Route::dispatch($request);
        $data = json_decode($response->getContent(), true);
        //dd($request);
        return view('page.details',["id"=>$id,"data"=>$data['data']]);
    }
     

    function account(){
        $data=Auth::user();
   
        return view('page.account',['data'=>$data]);
    }
  function authentication(){
        return view('page.auth');
    }

    function cart(){
        $cart=null;
        return view('page.cart',['cart'=>$cart]);

    }

    function category($category){
    $data=products::where('category_id',$category)->get()->load(["category","images","stock"]);
    $categorytype=category::where("category_id",$category)->get();
    return view('page.category',["data"=>$data,"category"=>$categorytype]);
    }

  

    function unpaid(){
        return view('page.unpaid');
    }

    function packing(){
        return view('page.packing');
    }

    function sent(){
        return view('page.sent');
    }

    function rating(){
        return view('page.rating');
    }
    function address(){
        return view('page.address');
    }
    function vouchers(){
        return view('page.voucher');
    }

     
}
