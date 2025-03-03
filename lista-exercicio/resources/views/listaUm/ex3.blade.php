@extends('layout')

@section('title', 'Exercicio 3')

@section('content')

    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post">
            @csrf

            <div class="input-group mb-2">
                <label class="form-label" for="temp">Temperatura em Farenheit:</label>
                <input type="number" name="temp" id="" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Enviar</button>

        </form>
    </div>

    @if(isset($response))
        <div class="d-flex justify-content-center mt-2">
            <div class="alert alert-success" role="alert">
              <p>A temperatura em farenheit é: {{$response}}</p>  
            </div>
        </div>
    @endif


@endsection