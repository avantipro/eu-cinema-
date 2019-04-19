<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	       return 'create meth';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'this show meth';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getFilm()
    {
	      //$f = new  Film();

        // $film =	Film::paginate(9);

        // $res = DB::table('film')->select('name')->get();
        // $d['res']   @endforeach     @foreach ($anon as $items)

        // $res = DB::select('SELECT actor.id AS `id`,
        //                    film.name AS `filmname`,
        //                    director.name AS `director`,
        //                    actor.name AS `actors`,
        //                    film.country AS `country`,
        //                    genre.name AS `genre`,
        //                    film.year AS `year`,
        //                    film.url AS `url`,
        //                    film.img AS `img`,
        //                    film.last AS `las`,
        //                    film.description AS `description`
        //                    FROM `actor` JOIN `film`
        //                    JOIN `director` JOIN `genre`
        //                    ON actor.id=film.id
        //                    WHERE film.id=director.id
        //                    AND film.id=genre.id');
        //
        //




        $res = DB::table('actor')
                   ->select('actor.id as id',
                            'film.name as filmname',
                            'director.name as director',
                            'actor.name as actors',
                            'film.country as country',
                            'genre.name as genre',
                            'film.year as year',
                            'film.url as url',
                            'film.img as img',
                            'film.last as las',
                            'film.description as description')
                   ->join('film', 'actor.id', '=', 'film.id')
                   ->join('director', 'film.id', '=', 'director.id')
                   ->join('genre', 'film.id', '=', 'genre.id')
                   ->paginate(9);






        $anon = DB::select('SELECT `id`, `name`, `genre`,
                            `desc` AS `des`, `actors`, `director`,
                            `country`, `date`, `img`
                            FROM `anounce` ORDER BY `date`');


        $genre = DB::select('SELECT * FROM `genres`');

      $first = array_shift($anon);
      $two = array_shift($anon);
      // $slider = array_slice($anon, 1);   , 'slider'
          //foreach ($res as $k => $v)
          //{
           //   echo "<br>";
              //var_dump($v);
            //  echo "<br>";
          //}
 // dump($res);

	       // dd($genre);
       // $re  = array_chunk($res, 9);
       //
       // $pagi   =   $re[1];
       // $goto = array_chunk($pagi, 4);
 // dd($pagi[1]);

 // dump($re[1]);
	 // return view('welcome', compact($res));
	    // return view('welcome', $res);
// return view('welcome', compact(['res' ,'genre', 'anon', 'first', 'two', 'pagi', 'goto']));
return view('welcome', compact(['res' ,'genre', 'anon', 'first', 'two']));
// , 'pagi'





// SELECT  genres.name AS name FROM genres WHERE id
// IN (SELECT id_genre FROM genres_films WHERE id_films = 93)



    }

}
