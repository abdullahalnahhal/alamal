<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "achievements";
    protected $fillable = [
        'title',
        'description',
        'file_name',
    ];
}
