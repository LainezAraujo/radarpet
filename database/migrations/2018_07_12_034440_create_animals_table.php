<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->enum('age', ['filhote', 'jovem', 'adulto']);
            $table->enum('gender', ['M','F']);
            $table->string('primary_color');
            $table->string('secundary_color')->nullable();
            $table->integer('coat_id')->unsigned();
            $table->foreign('coat_id')->references('id')->on('coats');
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colors');
            $table->integer('image_id')->unsigned()->nullable();
            $table->foreign('image_id')->references('id')->on('images');
            $table->integer('profile_photo_id')->unsigned()->nullable();
            $table->foreign('profile_photo_id')->references('id')->on('profile_photos');
            $table->integer('situation_id')->unsigned();
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->integer('specie_id')->unsigned();
            $table->foreign('specie_id')->references('id')->on('species');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
