<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['test_participante_id'];

    public function participante(){
        return $this->belongsTo(TestParticipante::class, 'test_participante_id');
    }

    public function respuestas() {
        return $this->hasMany(TestRespuestas::class);
    }

}
