<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaUmController extends Controller
{
    public function exercicioUmForm()
    {
        return view('listaUm.exercicioUmForm');
    }

    public function exercicioUmPost(Request $request)
    {
        $media = ($request->n1 + $request->n2 + $request->n3) / 3;

        return view('listaUm.exercicioUmForm', ['media'=>$media]);
    }

    public function exercicioDoisForm()
    {
        return view('listaUm.ex2');
    }
}
