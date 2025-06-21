<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('pages.product.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    
 /*    $request->validate([
        'product_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'sub_category_id' => 'required|exists:subcategories,id'
    ]); */

    Product::create([
        
        'name' => $request->product_name,
        'description' => $request->descriptiont_name,
        'price' => $request->price,
        'stock' => $request->stock,
        'sub_category_id' => $request->subcategory_id
       
    ]);

    return redirect()->route('product.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
