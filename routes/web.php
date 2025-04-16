<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommConntroller;
use App\Http\Controllers\Frontend\FrontPageController;
use App\Http\Controllers\Frontend\SelflinkCategory;
use App\Http\Controllers\Frontend\SingleProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Catch_;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [FrontPageController::class, 'show'])->name('anasayfa');
Route::get('/urunler', [FrontPageController::class, 'index'])->name('products');
Route::get('/urundetay{id}', [SingleProductController::class, 'index'])->name('urundetay');
Route::get('/kategori-{selflink}', [SelflinkCategory::class, 'kategoriUrunleri'])->name('kategori');
Route::get('/hakkimizda', [AboutController::class, 'show'])->name('about');
Route::get('/iletisim', [CommConntroller::class, 'show'])->name('contact');




// ADMİN ROUTES

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');

    //about
    Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');
    Route::get('/admin/addabout', [AboutController::class, 'create'])->name('admin.about.add');
    Route::post('/admin/addabout/store', [AboutController::class, 'store'])->name('admin.about.store');
    Route::get('/admin/aboutedit{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
    Route::post('/admin/aboutedit{id}', [AboutController::class, 'update'])->name('admin.about.update');
    Route::delete('/admin/deleteabout{id}', [AboutController::class, 'destroy'])->name('admin.about.destroy');

    //communication
    Route::get('/admin/iletisim', [CommConntroller::class, 'index'])->name('admin.iletisim');
    Route::get('/admin/iletisim-ekle', [CommConntroller::class, 'create'])->name('admin.iletisim.add');
    Route::post('/admin/iletisim-ekle/store', [CommConntroller::class, 'store'])->name('admin.iletisim.store');
    Route::get('/admin/iletisim-duzenle{id}', [CommConntroller::class, 'edit'])->name('admin.iletisim.edit');
    Route::post('/admin/iletisim-duzenle{id}', [CommConntroller::class, 'update'])->name('admin.iletisim.update');
    Route::delete('/admin/iletisim-sil{id}', [CommConntroller::class, 'destroy'])->name('admin.iletisim.destroy');

    //product
    Route::get('/admin/urunler', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/urunekle', [ProductController::class, 'create'])->name('product.add');
    Route::post('/admin/urunekle/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/urunduzenle{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/admin/urunduzenle{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/urunsil{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    //category
    Route::get('/admin/kategoriler', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/kategoriekle', [CategoryController::class, 'create'])->name('category.add');
    Route::post('/admin/kategoriekle/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/kategoriduzenle{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/admin/kategoriduzenle{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/admin/kategorisil{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});




require __DIR__.'/auth.php';
