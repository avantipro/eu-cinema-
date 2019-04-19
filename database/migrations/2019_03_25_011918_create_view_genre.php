<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("
		CREATE VIEW genre AS
SELECT genres_films.id_films AS id, GROUP_CONCAT(genres.name) AS name
FROM `genres` JOIN `genres_films` ON genres.id=genres_films.id_genre
GROUP BY genres_films.id_films
ORDER BY genres_films.id_films;
	");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_genre');
    }
}
