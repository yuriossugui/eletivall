@extends('layout')

@section('title', 'Exercicio 1')

@section('content')

    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post">
            @csrf

            <div class="input-group mb-2">
                <label class="form-label" for="p1">Nota da P1:</label>
                <input type="number" name="p1" id="" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="form-label" for="p2">Nota da P2:</label>
                <input type="number" name="p2" id="" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="form-label" for="p3">Nota da P3:</label>
                <input type="number" name="p3" id="" class="form-control">
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    @if(isset($response))
        <div class="d-flex justify-content-center mt-2">
            <div class="alert alert-success" role="alert">
              <p>A média é: {{$response}}</p>  
            </div>
        </div>
    @endif


@endsection