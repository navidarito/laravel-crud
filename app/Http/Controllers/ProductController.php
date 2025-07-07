<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){

    }

    public function store(Request $request){

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();


        return redirect('/products');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');
    }





}
