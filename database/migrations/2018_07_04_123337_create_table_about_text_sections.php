<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAboutTextSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('text_en');
            $table->string('text_ar');
            $table->text('file_path');
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
        Schema::dropIfExists('about_sections');
    }
}
