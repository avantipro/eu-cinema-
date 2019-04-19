<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewActor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       \DB::statement("
CREATE VIEW actor AS SELECT people_films_role.id_films AS id,
GROUP_CONCAT(people.name) AS name, role
FROM people JOIN people_films_role
ON people.id=people_films_role.id_people
WHERE role='Actor'
GROUP BY people_films_role.id_films
ORDER BY people_films_role.id_films;

	

	");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_actor');
    }
}
