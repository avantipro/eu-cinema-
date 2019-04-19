<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film'; 

    protected $primaryKey = 'id';

    public  $incrementing = FALSE;

    public  $timestamps = FALSE;
}
