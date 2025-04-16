<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.pages.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => ['required', 'string'],
        ],[
            'categoryName.required' => 'Kategori Adı zorunludur.'
        ]);

        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->save();

        return redirect()->route('admin.category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.pages.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryName' => ['required','string','max:255'],
        ],[
            'categoryName.required' => 'Kategori adı zorunludur.',
        ]);

        $category = Category::find($id);
        $category->categoryName = $request->categoryName;

        $category->save();
        return redirect()->route('admin.category')->with('success', 'Kategori başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Ürün başarıyla silindi');
    }
}
