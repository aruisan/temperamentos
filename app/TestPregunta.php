<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestPregunta extends Model
{
    protected $fillable = ['pregunta'];

    public function palabras() {
        return $this->hasMany(TestPalabra::class);
    }
}
