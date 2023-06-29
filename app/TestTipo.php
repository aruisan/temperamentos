<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTipo extends Model
{
    protected $fillable = ['nombre'];

    public function palabras() {
        return $this->hasMany(TestPalabra::class);
    }
}
