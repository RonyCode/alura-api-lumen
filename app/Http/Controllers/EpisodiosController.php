<?php

namespace App\Http\Controllers;

use App\Providers\Episodio;
use App\Http\Controllers\BaseController;

class EpisodiosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }
}
