<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the Intrant product.
     *
     * @return \Illuminate\Http\Response
     */
    public function intrant()
    {
        $products = Product::all();
        return response()->json($products);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        
        $request->validate([
            'name' => 'required|string',
            'description' =>'required|string|max:1000',
            'price' =>'required|integer',
            'comparative_price' =>'required|integer',
            'quantity' =>'required|integer',
            'subCategory_id' =>'required|integer',
            'unit_id' =>'required|integer',
        ]);
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' =>$request->price,
            'comparative_price' =>$request->comparative_price,
            'quantity' =>$request->quantity,
            'unit_id' =>$request->unit_id,
            'sub_category_id' =>$request->subCategory_id
        ]);
        foreach ($request->get('images') as $image) {
            $product->images->create([
                'path' => $image->store()
            ]);
        }
        return response()->json([
            'message' => 'Successfully created product!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
