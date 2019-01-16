<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArFieldsOnProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('description', 'description_en');
            $table->text('title_ar')->nullable();
            $table->text('description_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('description_en', 'description');
            $table->renameColumn('title_en', 'title');
            $table->dropColumn('title_ar');
            $table->dropColumn('description_ar');
        });
    }
}
