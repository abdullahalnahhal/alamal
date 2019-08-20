<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "contacts";
    protected $fillable = [
        'address',
        'phone',
        'working_days',
        'email',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'linkedin',
        'google_plus'
    ];
    protected $casts = [
        'address' => 'array',
        'phone' => 'array',
        'working_days' => 'array',
        'email' => 'array',
        'facebook' => 'array',
        'twitter' => 'array',
        'instagram' => 'array',
        'youtube' => 'array',
        'linkedin' => 'array',
        'google_plus' => 'array'
    ];
}
