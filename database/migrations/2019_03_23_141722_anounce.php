<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anounce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anounce', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name', 100);
               $table->string('genre', 80);
               $table->text('desc');
               $table->text('actors');
               $table->text('director');
               $table->text('country');
               $table->date('date');
               $table->string('img', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anounce');
    }
}
