<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatesPeopleFilmsRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people_films_role', function (Blueprint $table) {
               $table->foreign('id_people')->references('id')->on('people');
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
        Schema::table('people_films_role', function (Blueprint $table) {
            //
        });
    }
}
