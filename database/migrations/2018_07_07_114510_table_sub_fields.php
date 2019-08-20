<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSubFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('text_en');
            $table->string('text_ar');
            $table->text('file_path');
            $table->unsignedInteger('field_id');
            $table->timestamps();
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_fields');
    }
}
