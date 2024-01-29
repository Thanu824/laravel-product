<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ptype;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $product;
    public function __construct(){
        $this->product= new Product();
    }

    public function index()
    {
        //return $this->product->all();
        $products=Product::with("ptype")->get();
        $ptypes=Ptype::with("products")->get();
        return view("products.index",compact("products","ptypes"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation part and error message
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|min:3',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'ptype_id' => 'required|exists:ptypes,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 202,
                "message" => $validator->errors()->first()
            ], 202);
        } else {
            return $this->product->create($request->all());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $product = $this->product->find($id); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product= $this->product->find($id);
         $product->update($request->all());
         return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->product->find($id);
        return $product->delete(); 
    }
}
