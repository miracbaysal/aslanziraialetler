<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'urunler';
    
    protected $fillable = [
        'productName', 
        'productDescription', 
        'productPrice',
        'productImage',
        'categoryId'
    ];

    // Bir ürün bir kategoriye ait
    public function category() {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
