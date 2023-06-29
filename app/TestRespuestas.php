<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestRespuestas extends Model
{
    protected $fillable = ['test_id', 'palabra_id'];

    public function test(){
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function palabra(){
        return $this->belongsTo(TestPalabra::class, 'test_palabra_id');;
    }


}
