@extends('layout')

@section('title', 'Exercicio 7')

@section('content')

    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post">
            @csrf

            <div class="input-group mb-2">
                <label class="form-label" for="p1">Raio:</label>
                <input type="number" name="raio" id="" class="form-control">
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    @if(isset($response))
        <div class="d-flex justify-content-center mt-2">
            <div class="alert alert-success" role="alert">
              <p>O perimetro é: {{$response}}</p>  
            </div>
        </div>
    @endif


@endsection