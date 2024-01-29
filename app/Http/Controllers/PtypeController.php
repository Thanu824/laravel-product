<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ptype;

use Illuminate\Support\Facades\Validator;

class PtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $ptype;
    public function __construct(){
        $this->ptype= new Ptype();
    }

    public function index()
    {
        return $this->ptype->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|min:3',
            "description"=>"required|max:255|min:2",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 402,
                "message" => $validator->errors()->first()
            ], 202);
        } else {
            
    

        return $this->ptype->create($request->all());
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $ptype = $this->ptype->find($id); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ptype = $this->ptype->find($id);
         $ptype->update($request->all());
         return $ptype;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ptype = $this->ptype->find($id);
        return $ptype->delete(); 
    }
}
