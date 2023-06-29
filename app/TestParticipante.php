<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestParticipante extends Model
{
    protected $fillable = ['owner_id', 'nombre'];

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function tests(){
        return $this->hasMany(Test::class, 'test_participante_id');
    }
}
