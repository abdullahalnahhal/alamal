<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->json('address')->nullable();
            $table->json('phone')->nullable();
            $table->json('working_days')->nullable();
            $table->json('email')->nullable();
            $table->json('facebook')->nullable();
            $table->json('twitter')->nullable();
            $table->json('instagram')->nullable();
            $table->json('youtube')->nullable();
            $table->json('linkedin')->nullable();
            $table->json('google_plus')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
