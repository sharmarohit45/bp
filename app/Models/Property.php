<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'propertyType', 
        'propertyPrice', 
        'propertyName', 
        'state', 
        'address',
        'city',
        'squareFit', 
        'bedNumber', 
        'bathNumber',
        'image_paths',
        'posted_from',
    ];
    
}

