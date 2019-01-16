<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArDescriptionOnColumnAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('text_word', function (Blueprint $table) {
            $table->renameColumn('text', 'text_en');
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
        Schema::table('text_word', function (Blueprint $table) {
            $table->renameColumn('text_en', 'text');
            $table->dropColumn('text_ar');
        });
    }
}
