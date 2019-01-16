<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "fields";
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'file_name',
    ];
    public function sub_fields()
    {
        return $this->hasMany('App\SubFields', 'field_id', 'id');
    }
}
