<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);

   /*      return view('products.show',compact('$product'));
 */         
        return response()->json([
            'product' => $product
        ]); 
    }

    public function create(){

    }


    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            $data = [
                'message' => 'Error validating data',
                'errors' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data,400);

        }else{

            $product = new Product;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;

            $product->save();


            return redirect('/products');

        }

    }

    public function edit_page(Request $request,$id){

        $product = Product::find($id);



        return view('products.edit',compact('product'));

        /*  return response()->json([
            'product' => $product,
            '$id' =>$id
        ]);  */ 
    } 
    

    public function update(Request $request, $id){

        
        
        $product = Product::find($id);

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
