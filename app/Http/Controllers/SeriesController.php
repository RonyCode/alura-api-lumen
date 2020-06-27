<?php

namespace App\Http\Controllers;

use App\Providers\Serie;

class SeriesController
{
    public function index()
    {
        return Serie::all();
    }
}
