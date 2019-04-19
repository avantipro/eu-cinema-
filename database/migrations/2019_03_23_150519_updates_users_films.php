<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatesUsersFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_films', function (Blueprint $table) {

             $table->foreign('id_users')->references('id')->on('users');
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
        Schema::table('users_films', function (Blueprint $table) {
            //
        });
    }
}
