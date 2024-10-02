<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiry'; // Specify your actual table name here

    protected $fillable = [
        'property_name',
        'property_location',
        'name', 
        'email', 
        'phone'
    ];
}

