<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\productCollection;
use App\Http\Resources\v1\productResource;
use App\Models\products;
use App\Filters\v1\productsFilter;
use App\Http\Requests\v1\StoreProductRequest;
use App\Models\category;
use App\Models\images;
use App\Models\stock;
use Illuminate\Http\Request;

class productController extends Controller
{
    function index(Request $request){
        $filter= new productsFilter();
        $queryItems=$filter->transform($request);
        
        if(count($queryItems)==0){
            return new productCollection(products::inRandomOrder()->get());
        }else{
            return new productCollection(products::where($queryItems)->get());
        }


    }

    function show(products $product){
        //dd($product->load(["category","images","stock"])->toArray() );
        return new productResource($product->load(["category","images","stock"]));
    }
 
    function showByCategory( $category){
        $products = products::where('category_id', $category)->get();
       
        return new productResource($products);
    }


    function store(StoreProductRequest $request){
            $stock=stock::create([
                'm'=>$request->m,
                's'=>$request->s,
                'l'=>$request->l,
                'xl'=>$request->xl,
                'xxl'=>$request->xxl
            ]);
             
            $images=images::create([ 
                'img1'=>$request->hasFile('img1') ? $request->file('img1')->store('products','public'):null,
                'img2'=>$request->hasFile('img2') ? $request->file('img2')->store('products','public'):null,
                'img3'=>$request->hasFile('img3') ? $request->file('img3')->store('products','public'):null,
                'img4'=>$request->hasFile('img4') ? $request->file('img4')->store('products','public'):null,
                'img5'=>$request->hasFile('img5') ? $request->file('img5')->store('products','public'):null,
            ]);
            $category=category::where('category',$request->category)->get();
         
            return new productResource(products::create([
                "name"=>$request->name,
                "description"=>$request->description,
                "price"=>$request->price,
                "stock_id"=>$stock->id,
                "image_id"=>$images->id,
                "category_id"=>$category->category_id 
            ]));
    }
}
