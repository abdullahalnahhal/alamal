<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "partners";
    protected $fillable = [
        'title_en',
        'title_ar',
        'text_en',
        'text_ar',
        'file_path',
    ];
    public function products()
    {
        return $this->hasMany('App\Products', 'partner_id');
    }
}
