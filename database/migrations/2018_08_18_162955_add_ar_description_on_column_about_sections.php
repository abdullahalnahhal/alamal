<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArDescriptionOnColumnAboutSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('text', 'text_en');
            $table->text('title_ar')->nullable();
            $table->text('text_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_sections', function (Blueprint $table) {
            $table->renameColumn('text_en', 'text');
            $table->renameColumn('title_en', 'title');
            $table->dropColumn('title_ar');
            $table->dropColumn('text_ar');
        });
    }
}
