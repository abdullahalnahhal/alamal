<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubFields extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "sub_fields";
    protected $fillable = [
        'title',
        'description',
        'file_name',
        'field_id',
    ];
    public function field()
    {
        return $this->hasOne('App\Fields', 'id', 'field_id');
    }
}
