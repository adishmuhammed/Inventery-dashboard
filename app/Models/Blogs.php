<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'blog_title',
        'blog_image',
        'blog_content',
        'blog_tags'
    ];
}
