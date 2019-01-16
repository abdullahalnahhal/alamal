<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "subscribes";
    protected $fillable = [
        'content',
    ];
}
