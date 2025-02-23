<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'link_title',
        'link',
        'icon_path',
        'image_path',
    ];
}
