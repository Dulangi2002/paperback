<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'description',
        'price',
        'category',
        'quantity',
        'image',  
    ];
}