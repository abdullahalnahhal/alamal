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
        'name',
        'description_en',
        'description_ar',
    ];
}
