<?php

namespace App\Http\Controllers;


use App\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index() {
        return Serie::all();
    }

    public function store(Request $request) {

       return response()
           ->json(Serie::create($request->all()), 201);
    }
}