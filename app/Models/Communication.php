<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $table = 'commsection';

    protected $fillable = [
        'address',
        'email',
        'phone',
        'workingHours',
    ];
}
