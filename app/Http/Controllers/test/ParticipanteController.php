<?php

namespace App\Http\Controllers\test;

use App\Test;
use App\TestParticipante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ParticipanteController extends Controller
{
    public function store(Request $request){
        $participante = TestParticipante::create($request->all() + ['owner_id' => auth()->id()]);
        $test = Test::create(['test_participante_id' => $participante->id]);

        return redirect()->route('test.create', $test);
    }
}
