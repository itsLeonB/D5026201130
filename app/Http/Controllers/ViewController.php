<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        return view('ets');
    }

    function tugasPHP() {
        return view('tugas_php');
    }

    function showResults(Request $request) {
        return view('results');
    }
}
