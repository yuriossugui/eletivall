@extends('layout')

@section('title', 'lista ')

@section('content')

    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="" method="post">
            @csrf

            <div class="input-group mb-2">
                <label class="form-label" for="p1">numero 1:</label>
                <input type="number" name="a" id="" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="form-label" for="p2">numero 2:</label>
                <input type="number" name="b" id="" class="form-control">
            </div>

        

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    @if(isset($response))
        <div class="d-flex justify-content-center mt-2">
            <div class="alert alert-success" role="alert">
              <p>A resposta é: {{$response}}</p>  
            </div>
        </div>
    @endif


@endsection