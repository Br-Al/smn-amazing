<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            foreach ($category->categorize as $subCategory) {
                $subCategory->categorize;
            }
        }
        return response()->json(
            $categories
        );
    }
    /**
     * Display a listing of the categories that doesn't have parent.
     *
     * @return \Illuminate\Http\Response
     */
    public function rootCategory()
    {
        $categories = Category::whereNotparent();
        foreach ($categories as $category) {
            foreach ($category->categorize as $subCategory) {
                $subCategory->categorize;
            }
        }
        return response()->json(
            $categories
        );
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
        $request->validate([
            'name' => 'required|string',
            'description' =>'required|string|max:1000'
        ]);
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        $parents = $request->get('parents'); 
        if ($parents != null){
            //dd($parents);
            foreach ($parents as $id) {
                $sub_category = Category::findOrFail($id);
                $sub_category->categorize()->attach($category->id);
            }
        }
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
