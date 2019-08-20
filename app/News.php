<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "news";
    protected $fillable = [
        'title',
        'text',
        'file_path',
        'published',
    ];
}
