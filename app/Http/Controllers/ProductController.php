<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Page::with('category')->get();

        return view('admin.pages.products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['getCategory'] = Category::get();
        return view('admin.pages.add_product', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'productName' => ['required','string','max:255'],
            'productDescription' => ['required','string'],
            'productPrice' => ['nullable'],
            'categoryId' => ['required', 'exists:kategoriler,id'],
            'productImage' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ],[
            'productName.required' => 'Ürün adı zorunludur.',
            'productName.string' => 'Ürün adı sadece harfler ve özel karakterler içermeli.',
            'productName.max' => 'Ürün adı 255 karakterden uzun olamaz.',
            'productDescription.string' => 'Açıklama sadece harfler ve özel karakterler içermeli.',
            'productDescription.required' => 'Ürün açıklaması gereklidir.',
            'categoryId.exists' => 'Kategori seçmek zorunludur.',
        ]);
        // Page::create($validatedData);
        if ($request->hasFile('productImage')){
            $file = $request->file('productImage');
            $fileName = $file->getClientOriginalName();

            //image resize
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(445, 445)->save(public_path('dist/img/products/' . $fileName));

            // $path = public_path().'/dist/img/products';
            // $file->move($path,$fileName);
            
        }

        $product = new Page();
        $product->categoryId = $request->categoryId;
        $product->productName = $request->productName;
        $product->productDescription = $request->productDescription;
        $product->productPrice = $request->productPrice;
        $product->productImage = $fileName;
        $product->save();
        

        return redirect()->route('admin.products')->with('success', 'Ürün başarıyla eklendi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = Category::get();
        $product = Page::find($id); 
        return view('admin.pages.edit_product', compact('product','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'productName' => ['required','string','max:255'],
            'productDescription' => ['required','string'],
            'productPrice' => ['nullable'],
            'categoryId' => ['required', 'exists:kategoriler,id'],
            'productImage' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
        ],[
            'productName.required' => 'Ürün adı gereklidir.',
            'productName.string' => 'Ürün adı sadece harfler ve özel karakterler içermeli.',
            'productName.max' => 'Ürün adı 255 karakterden uzun olamaz.',
            'productDescription.string' => 'Açıklama sadece harfler ve özel karakterler içermeli.',
            'productDescription.required' => 'Ürün açıklaması gereklidir.',
            'categoryId.exists' => 'Kategori seçmek zorunludur.',
        ]);

        if ($request->hasFile('productImage')){
            $file = $request->file('productImage');
            $fileName = $file->getClientOriginalName();
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(445, 445)->save(public_path('dist/img/products/' . $fileName));
        }else {
            // Yeni fotoğraf yoksa, eskisini kullan
            $fileName = $request->oldImage;
        }

        $page = Page::find($id);
        $page->productName = $request->productName;
        $page->productDescription = $request->productDescription;
        $page->productPrice = $request->productPrice;
        $page->categoryId = $request->categoryId;
        $page->productImage = $fileName;
        
        $page->save();
        return redirect()->route('admin.products')->with('success', 'Ürün başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Page::find($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Ürün başarıyla silindi');
    }
}
