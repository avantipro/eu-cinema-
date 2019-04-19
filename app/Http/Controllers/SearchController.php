<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        if ( $request->get('query') )
        {
            $query = $request->get('query');
            // $data = DB::table('actor');
            $search = DB::table('actor')
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
                   // ->where('genre.name', 'like', '%' . 'Комедия' . '%')
                   ->where('film.name', 'like', '%' . {$query} . '%')
                   ->get();

             $output = '<ul class="dropdown-menu"
                        style="display:block;
                        position:relative">';

             foreach ($search as $row)
             {
                $output .= '<li><a href="#">' . $row->filmname . '</a></li>';
             }
             $output .= '</ul>';

             echo $output;
        }
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
        //
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
}
