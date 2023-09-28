<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description', 
        'meta_keywords',
        'news_title',
        'slug',
        'short_description',
        'content',
        'new_thumbnail',
        'alt_tag',
       ];
}
