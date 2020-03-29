<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index() {
        return view('bmi/index');
    }

    public function calc(Request $request) {
      $weight = $request->weight;
      $height = $request->height;
      $result = $weight / $height / $height;
      return view('bmi/result', ['result' => $result]);
    }
}