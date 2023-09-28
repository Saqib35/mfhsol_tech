<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    
    protected $fillable = [
         'meta_title',
         'meta_description', 
         'meta_keywords',
         'category_name',
         'slug',
         'category_img',
         'alt_tag'
        ];
}
