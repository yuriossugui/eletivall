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

    public function ex4Post(Request $request) {
        $valor = $request->valor;
        $response = '';
        $primos = [];
    
        for ($numero = 2; $numero <= $valor; $numero++) {
            $ehPrimo = true;
            for ($divisor = 2; $divisor <= sqrt($numero); $divisor++) {
                if ($numero % $divisor == 0) {
                    $ehPrimo = false;
                    break;
                }
            }
            if ($ehPrimo) {
                $primos[] = $numero;
            }
        }
    
        $response = implode(', ', $primos); // Converte o array em uma string separada por vírgulas
    
        return view('listaDois.ex4', ['response' => $response]);
    }

    public function ex5(){
        return view('listaDois.ex5');
    }

    public function ex5Post(Request $request) {
        $valor = $request->valor;
        $mes = '';
    
        switch ($valor) {
            case 1:
                $mes = 'Janeiro';
                break;
            case 2:
                $mes = 'Fevereiro';
                break;
            case 3:
                $mes = 'Março';
                break;
            case 4:
                $mes = 'Abril';
                break;
            case 5:
                $mes = 'Maio';
                break;
            case 6:
                $mes = 'Junho';
                break;
            case 7:
                $mes = 'Julho';
                break;
            case 8:
                $mes = 'Agosto';
                break;
            case 9:
                $mes = 'Setembro';
                break;
            case 10:
                $mes = 'Outubro';
                break;
            case 11:
                $mes = 'Novembro';
                break;
            case 12:
                $mes = 'Dezembro';
                break;
            default:
                $mes = 'Mês inválido';
                break;
        }
    
        return view('listaDois.ex5', ['mes' => $mes]);
    }

    public function ex6(){
        return view('listaDois.ex6');
    }

    public function ex6Post(Request $request) {
        $valor = $request->valor;
        $response = '';
    
        for ($i = 1; $i <= $valor; $i++) {
            $response .= $i . ' ';
        }
    
        return view('listaDois.ex6', ['response' => $response]);
    }

    public function ex7(){
        return view('listaDois.ex7');
    }

    public function ex7Post(Request $request) {
        $valor = $request->valor;
        $response = '';
        $soma = 0;
        $i = 1;
    
        while ($i <= $valor) {
            $soma += $i;
            $i++;
        }
    
        $response = "A soma dos números de 1 até $valor é: $soma";
    
        return view('listaDois.ex7', ['response' => $response]);
    }

    public function ex8(){
        return view('listaDois.ex8');
    }

    public function ex8Post(Request $request) {
        $valor = $request->valor;
        $response = '';
    
        if ($valor > 0) {
            do {
                $response .= $valor . ' ';
                $valor--;
            } while ($valor >= 1);
        } else {
            $response = "Por favor, insira um número positivo.";
        }
    
        return view('listaDois.ex8', ['response' => $response]);
    }

    public function ex9(){
        return view('listaDois.ex9');
    }

    public function ex9Post(Request $request) {
        $valor = $request->valor;
        $response = '';
        $fatorial = 1;
    
        if ($valor < 0) {
            $response = "Não é possível calcular o fatorial de um número negativo.";
        } elseif ($valor == 0) {
            $response = "O fatorial de 0 é 1.";
        } else {
            for ($i = 1; $i <= $valor; $i++) {
                $fatorial *= $i;
            }
            $response = "O fatorial de $valor é: $fatorial";
        }
    
        return view('listaDois.ex9', ['response' => $response]);
    }

    public function ex10(){
        return view('listaDois.ex10');
    }

    public function ex10Post(Request $request) {
        $valor = $request->valor;
        $response = '';
    
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $valor * $i;
            $response .= "$valor x $i = $resultado\n"; // \n adiciona uma quebra de linha
        }
    
        return view('listaDois.ex10', ['response' => $response]);
    }
}
