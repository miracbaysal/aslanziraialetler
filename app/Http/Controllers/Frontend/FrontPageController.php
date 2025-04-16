<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;


class FrontPageController extends Controller
{
    public function index()
    {
        $categories = Page::with('category')->get()->pluck('category')->unique('id');

        $product = Page::with('category')->paginate(10);

        return view('pages.products', compact('product', 'categories'));
    }

    public function show()
    {
        $product = Page::with('category')->paginate(6);
        
        return view('app', compact('product'));
    }
}
