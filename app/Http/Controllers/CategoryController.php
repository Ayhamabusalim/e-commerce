<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('pages.category.index', compact('categories'));
    }

    public function create()
    {

        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->category_name
        ]);

        return redirect()->route('category.index');
    }

    
    public function edit(Category $category)
    {
        return view('pages.category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->category_name,
            'updated_at' => now(),

        ]);

        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
