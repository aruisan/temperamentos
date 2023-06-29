<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestPalabra extends Model
{
    protected $fillable = ['test_pregunta_id', 'nombre', 'descripcion', 'test_tipo_id'];

    public function pregunta(){
        return $this->belongsTo(TestPregunta::class, 'test_palabra_id');
    }

    public function tipo(){
        return $this->belongsTo(TestTipo::class, 'test_tipo_id');
    }
}
