<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "settings";
    protected $fillable = [
        'title',
        'value',
        'icon',
    ];
    
    public static function app_name()
    {
        return self::find(1);
    }
}
