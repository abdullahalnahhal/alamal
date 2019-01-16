<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "products";
    protected $fillable = [
        'title',
        'description',
        'file_name',
        'partner_id',
    ];
}
