<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;
    public $table='extras_cate';
   
    protected $fillable = [
        'meta_title',
        'meta_description', 
        'meta_keywords',
        'category_slug',
        'sub_cate_slug',
        'extra_name',
        'slug',
        'alt_img',
        'extra_sub_cate_img'
       ];
}
