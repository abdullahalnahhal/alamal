<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextWord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "text_word";
    protected $fillable = [
        'text_ar',
        'text_en',
    ];
}
