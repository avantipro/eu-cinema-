<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeopleFilmsRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_films_role', function (Blueprint $table) {

           $table->integer('id_people')->unsigned();
           $table->integer('id_films')->unsigned();
           $table->enum('role', ['Director', 'Actor']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_films_role');
    }
}
