<?php

namespace App\Http\Controllers;


use App\Episodio;

class EpisodioController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }
}