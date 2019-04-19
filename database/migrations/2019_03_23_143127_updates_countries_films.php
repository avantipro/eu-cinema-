<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatesCountriesFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries_films', function (Blueprint $table) {
               $table->foreign('id_country')->references('id')->on('country');
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
        Schema::table('countries_films', function (Blueprint $table) {
            //
        });
    }
}
