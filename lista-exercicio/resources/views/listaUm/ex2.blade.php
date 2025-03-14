@extends('layout')

@section('title', 'Exercicio 2')

@section('content')

    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post">
            @csrf

            <div class="input-group mb-2">
                <label class="form-label" for="temp">Temperatura em Celcius:</label>
                <input type="number" name="temp" id="" class="form-control">
            </div>

        

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    @if(isset($tempF))
        <div class="d-flex justify-content-center mt-2">
            <div class="alert alert-success" role="alert">
              <p>A temperatura em Farenheit é: {{$tempF}}</p>  
            </div>
        </div>
    @endif


@endsection