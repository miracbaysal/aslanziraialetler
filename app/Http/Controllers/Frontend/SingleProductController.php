<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function index($id) 
    {
        $data = Category::get();

        $product = Page::find($id);

        // Aynı kategoride rastgele 3 ürün
        $relatedProducts = Page::with('category')
            ->where('categoryId', $product->category->id)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('pages.single-product', compact('product','data','relatedProducts'));
    }
}
