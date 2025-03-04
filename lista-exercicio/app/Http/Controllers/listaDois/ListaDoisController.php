<?php

namespace App\Http\Controllers\listaDois;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaDoisController extends Controller
{
    public function ex1(){
        return view('listaDois.ex1');
    }

    public function ex1Post(Request $request){
        
        $response = $request->n1 + $request->n2;
        if ($request->n1 === $request->n2) {
            $response *= 3;
        }
        
        return view('listaDois.ex1', ['response'=>$response]);
    }
    
    public function ex2(){
        return view('listaDois.ex2');
    }

    public function ex2Post(Request $request){
        
        $response = [$request->a, $request->b];
        sort($response);
        $response = implode(' ', $response);
        if ($request->a === $request->b) {
            $response = "Números iguais: " . $response;
        }
        
        return view('listaDois.ex2', ['response'=>$response]);
    }

    public function ex3(){
        return view('listaDois.ex3');
    }

    public function ex3Post(Request $request){
        
        $response = $request->valor;

        if ($response > 100) {
            $response -= $response * 0.15;
        }

        
        return view('listaDois.ex3', ['response'=>$response]);
    }

    public function ex4(){
        return view('listaDois.ex4');
    }

    public function ex4Post(Request $request){
        
        $response = '';
        for ($i = 1; $i <= $request->valor; $i++) {
            $response .= $i . ' ';
        }
  }
}
