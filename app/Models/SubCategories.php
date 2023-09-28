<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description', 
        'meta_keywords',
        'category_slug',
        'sub_cate_name',
        'slug',
        'sub_cate_img',
        'alt_img'
       ];
}
