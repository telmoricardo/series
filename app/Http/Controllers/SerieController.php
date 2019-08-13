<?php

namespace App\Http\Controllers;


use App\Serie;

class SerieController extends BaseController
{
    public function __construct()
    {
        $this->classe = Serie::class;
    }
}