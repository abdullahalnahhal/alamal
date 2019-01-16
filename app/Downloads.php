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
        'file_name_en',
        'file_name_ar',
        'file_description_en',
        'file_description_ar',
        'path',
    ];
}
