<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assisitido', 'serie_id'];

    public function serie() {

        return $this->belongsTo(Serie::class);

    }

    public function getAssistidoAttribute($assisitido) : bool {
        return $assisitido;
    }
  }