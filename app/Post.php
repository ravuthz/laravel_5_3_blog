<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'link', 'tags', 'content', 'summary',
        'seo_description', 'seo_keywords', 'is_published', 'published_at'
    ];



}
