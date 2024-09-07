<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Define your news table columns here
    protected $fillable = [
        'title',
        'content',
        'news_date',
        'status',
    ];
}