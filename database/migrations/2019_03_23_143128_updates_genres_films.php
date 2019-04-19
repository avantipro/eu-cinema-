<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatesGenresFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genres_films', function (Blueprint $table) {
                      
                   $table->foreign('id_genre')->references('id')->on('genres');
		   $table->foreign('id_films')->references('id')->on('films'); 
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genres_films', function (Blueprint $table) {
            //
        });
    }
}
