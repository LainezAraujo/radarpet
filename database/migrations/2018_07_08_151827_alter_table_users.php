<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('users', function (Blueprint $table) {
            $table-> string('last_name')->nullable();
            $table->string('cpf')->nullable();
            $table->date('birth')->nullable();
            $table->string('primary_phone')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->boolean('ong')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->unsignedInteger('profile_photo_id')->nullable();
            $table->foreign('profile_photo_id')->references('id')->on('profile_photos');
            $table->unsignedInteger('situation_id')->nullable();
            $table->foreign('situation_id')->references('id')->on('situations'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('last_name');
             $table->dropColumn('cpf');
             $table->dropColumn('birth');
             $table->dropColumn('primary_phone');
             $table->dropColumn('secondary_phone');
             $table->dropColumn('ong');
             $table->dropColumn('gender');
             $table->dropForeign('users_profile_photo_id_foreign');
             $table->dropColumn('profile_photo_id');
             $table->dropForeign('users_situation_id_foreign');
             $table->dropColumn('situation_id');

        });
    }
}
