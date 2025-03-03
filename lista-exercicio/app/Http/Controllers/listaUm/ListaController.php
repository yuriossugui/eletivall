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

    public function ex4(){
        return view('listaUm.ex4');
    }

    public function ex4Post(Request $request){
                
        $response = ($request->a * $request->l) / 2;

        return view('listaUm.ex4', ['response'=>$response]);
    }

    public function ex5(){
        return view('listaUm.ex5');
    }

    public function ex5Post(Request $request){
                
        $response = 3.14 * pow($request->raio, 2);

        return view('listaUm.ex5', ['response'=>$response]);
    }

    public function ex6(){
        return view('listaUm.ex6');
    }

    public function ex6Post(Request $request){
                
        $response = $request->largura * $request->altura;

        return view('listaUm.ex6', ['response'=>$response]);
    }

    public function ex7(){
        return view('listaUm.ex7');
    }

    public function ex7Post(Request $request){
                
        $response = 2 * 3.14 * $request->raio;

        return view('listaUm.ex7', ['response'=>$response]);
    }

    public function ex8(){
        return view('listaUm.ex8');
    }

    public function ex8Post(Request $request){
                
        $response = $request->base ** $request->expoente;

        return view('listaUm.ex8', ['response'=>$response]);
    }

    public function ex9(){
        return view('listaUm.ex9');
    }

    public function ex9Post(Request $request){
                
        $response = $request->metros * 100;

        return view('listaUm.ex9', ['response'=>$response]);
    }

    public function ex10(){
        return view('listaUm.ex10');
    }

    public function ex10Post(Request $request){

        $response = $request->km * 0.621371;

        return view('listaUm.ex10', ['response'=>$response]);
    }

    public function ex11(){
        return view('listaUm.ex11');
    }

    public function ex11Post(Request $request){

        $response = $request->peso / ($request->altura * $request->altura);

        return view('listaUm.ex11', ['response'=>$response]);
    }

    public function ex12(){
        return view('listaUm.ex12');
    }

    public function ex12Post(Request $request){

        $response = $request->preco - ($request->preco * $request->desconto / 100);

        return view('listaUm.ex12', ['response'=>$response]);
    }

    public function ex13(){
        return view('listaUm.ex13');
    }

    public function ex13Post(Request $request){

        $response = $request->capital * $request->perido * $request->taxa ;

        return view('listaUm.ex13', ['response'=>$response]);
    }

    public function ex14(){
        return view('listaUm.ex14');
    }

    public function ex14Post(Request $request){

        $response = $request->capital * pow(1 + $request->taxa, $request->periodo);

        return view('listaUm.ex14', ['response'=>$response]);
    }

    public function ex15(){
        return view('listaUm.ex15');
    }

    public function ex15Post(Request $request){

        $dias = $request->dias;
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        
        $response = "Dias: $dias, Horas: $horas, Minutos: $minutos, Segundos: $segundos";

        return view('listaUm.ex15', ['response'=>$response]);
    }
}
