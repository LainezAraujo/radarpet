<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBreeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('breeds', function (Blueprint $table) {
            $table->unsignedInteger('specie_id');   
            $table->foreign('specie_id')->references('id')->on('species'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('breeds', function (Blueprint $table) {
             $table->dropForeign('breeds_specie_id_foreign');
             $table->dropColumn('profile_photo_id');
        });
    }
}
