<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'kategoriler';
    
    protected $fillable = [
        'categoryName',
    ];

    public function productCategories() {
        return $this->hasMany(Page::class, 'categoryId');
    }
}
