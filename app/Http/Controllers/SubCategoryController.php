<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view("pages.subcategory.index", compact("subcategories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // أو ممكن ترتبهم حسب الاسم
        return view('pages.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Subcategory::create([
            'name' => $request->subcategory_name,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('subcategory.index');
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
    public function edit(SubCategory $subcategory)
{
    $categories = Category::all(); // لعرض الخيارات في الـ dropdown
    return view('pages.subcategory.edit', compact('subcategory', 'categories'));
}


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, SubCategory $subcategory)
{
    $request->validate([
        'category_name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
    ]);

    $subcategory->update([
        'name' => $request->category_name,
        'category_id' => $request->category_id,
    ]);

    return redirect()->route('subcategory.index')->with('success', 'SubCategory updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $subcategory = Subcategory::findOrFail($id);
         $subcategory->delete();

        return redirect()->route('subcategory.index')->with('success', 'Book deleted successfully.');
    }
}
