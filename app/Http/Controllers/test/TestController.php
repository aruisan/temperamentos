<?php

namespace App\Http\Controllers\test;

use App\Test;
use App\TestPregunta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function create(Test $test){
        //dd($test);
        $preguntas = TestPregunta::all();
        return view('test.test', compact('test', 'preguntas'));
    }

    public function store(Request $request, Test $test){
        $participante = TestParticipante::create($request->all() + ['owner_id', auth()->id()]);
        $test = Test::create(['test_participante_id', $participante->id]);

        return view('test.test', $test);
    }
}
