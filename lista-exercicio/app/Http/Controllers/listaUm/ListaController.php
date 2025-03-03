<?php

namespace App\Http\Controllers\listaUm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function ex1(){
        return view('listaUm.ex1');
    }

    public function ex1Post(Request $request){
        
        $response = ($request->p1 + $request->p2 + $request->p3) / 3;
        
        return view('listaUm.ex1', ['response'=>$response]);
    }

    // ex2
    public function ex2(){
        return view('listaUm.ex2');
    }

    public function ex2Post(Request $request){
    
        $tempF = ($request->temp * 9/5) + 32;
        
        return view('listaUm.ex2',['tempF'=>$tempF]);
    }

    public function ex3(){
        return view('listaUm.ex3');
    }

    public function ex3Post(Request $request){
                
        $response = ($request->temp - 32) * 5/9;

        return view('listaUm.ex3', ['response'=>$response]);
    }
}
