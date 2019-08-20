<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "slider";
    protected $fillable = [
        'title_en',
        'title_ar',
        'text_en',
        'text_ar',
        'file_path',
    ];
}
