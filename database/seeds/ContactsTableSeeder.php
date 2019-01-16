<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
        DB::table('contacts')->insert([
        	[
             	'id'=> 1,
                'title' => 'Address',
                'value' => '55 ElAshgar Street , Land no. 8058 ElMokattam , Cairo, Egypt.',
                'icon' => 'fa fa-map-marker',
            ],
            [
             	'id'=> 2,
                'title' => 'Phone',
                'value' => '+2 010 988 99624 /+2 011 544 43472',
                'icon' => 'fa fa-phone',
            ],
            [
             	'id'=> 3,
                'title' => 'Email',
                'value' => 'info@alamal.net',
                'icon' => 'fa fa-envelope',
            ],
            [
             	'id'=> 4,
                'title' => 'Working Days/Hours',
                'value' => 'Mon - Sun / 9:00 AM - 8:00 PM',
                'icon' => 'fa fa-clock-o',
            ],
            [
             	'id'=> 5,
                'title' => 'facebook',
                'value' => '',
                'icon' => 'fa fa-facebook-square',
            ],
            [
             	'id'=> 6,
                'title' => 'twitter',
                'value' => '',
                'icon' => 'fa fa-twitter-square',
            ],
            [
             	'id'=> 7,
                'title' => 'youtube',
                'value' => '',
                'icon' => 'fa fa-youtube-square',
            ],
            [
             	'id'=> 8,
                'title' => 'instagram',
                'value' => '',
                'icon' => 'fa fa-instagram',
            ],
            [
             	'id'=> 9,
                'title' => 'linkedin',
                'value' => '',
                'icon' => 'fa fa-linkedin-square',
            ],
            [
             	'id'=> 10,
                'title' => 'Google Plus',
                'value' => '',
                'icon' => 'fa fa-google-plus-square',
            ],
        ]);
    }
}
