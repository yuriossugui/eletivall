@extends('layouts.main')


@section('content')

    <form action="{{route('lista-um-ex-um-post')}}" method="post">
        @csrf

        <div class="row">
            <label class="form-label" for="">Primeira nota</label>
            <input type="number" class="form-control" name="n1" required>
        </div>

        <div class="row">
            <label class="form-label" for="">Segunda nota</label>
            <input type="number" class="form-control" name="n2" required>
        </div>

        <div class="row">
            <label class="form-label" for="">Terceira nota</label>
            <input type="number" class="form-control" name="n3" required>
        </div>

        <div class="row mt-2">
            <button class="btn btn-primary" type="submit">Calcular Média</button>
        </div>

    </form>


    @if(isset($media))
        <div class="mt-3">
            <h3>A média é {{ $media }}</h3>
        </div>
    @endif

@endsection