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
        'title',
        'value',
        'icon',
    ];

    public static function address()
    {
        return self::find(1);
    }

    public static function phone()
    {
        return self::find(2);
    }

    public static function email()
    {
        return self::find(3);
    }

    public static function warkingPeriod()
    {
        return self::find(4);
    }

    public static function facebook()
    {
        return self::find(5);
    }

    public static function twitter()
    {
        return self::find(6);
    }

    public static function youtube()
    {
        return self::find(7);
    }

    public static function insta()
    {
        return self::find(8);
    }

    public static function linkedin()
    {
        return self::find(9);
    }

    public static function googlePlus()
    {
        return self::find(10);
    }
}
