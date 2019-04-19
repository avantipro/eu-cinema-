<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       \DB::statement("
            CREATE VIEW film AS
            SELECT countries_films.id_films AS id, films.year AS year,
            films.descript AS description, films.url AS url, films.img AS img,
            GROUP_CONCAT(country.name) AS country, films.name, films.lasting AS last
            FROM `country` JOIN `countries_films` JOIN `films`
            ON country.id=countries_films.id_country
            WHERE countries_films.id_films=films.id
            GROUP BY countries_films.id_films
            ORDER BY countries_films.id_films;");
    }

    /** php artisan make:migration create_film_view
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_film');
    }
}
