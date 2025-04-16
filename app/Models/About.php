<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'aboutsection';
    
    protected $fillable = [
        'aboutTitle', 
        'aboutDescription',
        'title1', 
        'description1',
        'title2',
        'description2',
        'title3', 
        'description3',
        'title4', 
        'description4',
    ];
}
