<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "downloads";
    protected $fillable = [
        'title_ar',
        'title_en',
        'text_ar',
        'text_en',
        'file_path'
    ];
}
