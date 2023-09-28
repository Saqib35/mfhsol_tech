<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'meta_title',
        'meta_description', 
        'meta_keywords',
        'category_slug',
        'sub_cate_slug',
        'news_title',
        'slug',
        'short_description',
        'content',
        'new_thumbnail',
        'alt_tag',
        'extra_sub_cate_slug'
       ];
}
