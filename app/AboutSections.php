<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutSections extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "about_sections";
    protected $fillable = [
        'text_en',
        'text_ar',
        'title_en',
        'title_ar',
        'file_name'
    ];
}
