<?php

namespace Thakur\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b){
        $result =  ($a + $b);
        return view('calculator::index', compact('result'));
    }

    public function sub11($a, $b){
        $result =  ($a - $b);
        return view('calculator::index', compact('result'));
    }
}
