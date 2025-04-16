<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Category;


class SelflinkCategory extends Controller
{
    public function kategoriUrunleri($selflink)
    {
        $categories = Category::get();
        $category = Category::where('selflink', $selflink)->firstOrFail();
    
        $product = Page::with('category')
            ->where('categoryId', $category->id)
            ->paginate(9); // burada da paginate var
    
        return view('pages.products', compact('categories', 'product', 'category'));
    }
    
}

