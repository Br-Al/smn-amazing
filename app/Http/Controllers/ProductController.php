<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
           $products->images;
        }
        return response()->json($products);
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
           
        $path = public_path().'/img/product-images/';
        //dd(json_decode($request->get('categories_id')));
        // dd($request-json()->all());
        //dd($request->get('subCategories_id'));
        
        $request->validate([
            'name' => 'required|string',
            'description' =>'required|string|max:1000',
            'price' =>'required|integer',
           
            'quantity' =>'required|integer',
            'categories_id' =>'required',
           
        ]);
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' =>$request->price,
            'quantity' =>$request->quantity,
        ]);
      
        foreach (json_decode($request->get('categories_id')) as $id) {
            $category = Category::findOrFail(json_decode($id));
            $product->categories()->attach($category->id);
        }
        foreach ($request->files as $image) {
            $image_name = $product->name.'-'.rand(10, 99999999).'.'.$image->getClientOriginalExtension();

            $image->move($path, $image_name);
            $product->images()->create([
                'url' => env('APP_URL').'/img/product-images/'.$image_name,
                'alt' => env('APP_NAME').' '.$product->name,
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
