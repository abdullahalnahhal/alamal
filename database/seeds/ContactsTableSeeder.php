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
        \App\Contacts::create(
            [
                'address' => [
                    'title' => 'Address',
                    'value' => '55 ElAshgar Street , Land no. 8058 ElMokattam , Cairo, Egypt.',
                    'icon' => 'fa fa-map-marker',
                ],
                'phone' => [

                    'value' => '+2 010 988 99624 /+2 011 544 43472',
                    'icon' => 'fa fa-phone',
                ],
                'email' => [
                    'value' => 'info@alamal.net',
                    'icon' => 'fa fa-envelope',
                ],
                // [
                //  	'id'=> 4,
                //     'title' => 'Working Days/Hours',
                //     'value' => 'Mon - Sun / 9:00 AM - 8:00 PM',
                //     'icon' => 'fa fa-clock-o',
                // ],
                'facebook' => [
                    'value' => '',
                    'icon' => 'fa fa-facebook-square',
                ],
                'twitter' => [
                    'value' => '',
                    'icon' => 'fa fa-twitter-square',
                ],
                'youtube' => [
                    'value' => '',
                    'icon' => 'fa fa-youtube-square',
                ],
                'instagram' =>
                [
                    'value' => '',
                    'icon' => 'fa fa-instagram',
                ],
                'linkedin' =>
                [
                    'value' => '',
                    'icon' => 'fa fa-linkedin-square',
                ],
                'google_plus' =>
                [
                    'value' => '',
                    'icon' => 'fa fa-google-plus-square',
                ],
            ]
        );
    }
}
