<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    static function filterResponse($product){
        $temp['id']=$product->id;
        $temp['name']=$product->name;
        $temp['price']=$product->price;
        $temp['description']=$product->description;
        return $temp;
    }

    function index(){
  
       $teststring=[];
       
       foreach(Product::all() as $product){
            
            array_push($teststring,ProductController::filterResponse($product));
       
        }
        return $teststring;
        
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'price'=>'required'
        ]);
         return [ProductController::filterResponse( Product::create($request->all()))];
    }

    function show(Product $product){
      
        return [ProductController::filterResponse(Product::find($product)->first())];
    }

    function update(Request $request,$product){
       $col=Product::find($product);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'slug'=>'required',
            'price'=>'required'
        ]);
        $col->update($request->all());
        //return ProductController::filterResponse(Product::find($product)->first()->update($request->all()));
        return ProductController::filterResponse($col);
    }

    function destroy($product){
        return Product::destroy($product);
    }

    function search($name){
        return Product::where('name','like','%'.$name.'%')->get();
    }
}
