@extends('main')

@section('body')
    <div class="top-nav">
        <a href="{{url('/subsidios')}}">
            <button class="rounded-circle btn btn-danger h-100">
                <span class="oi oi-chevron-left"></span>
            </button>
        </a>
        <a href="/">
            <button class="rounded-circle btn btn-danger h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <form method="POST" action="{{url('/subsidios')}}" accept-charset="UTF-8">
        @csrf
        <h3 class="text-center"><strong>Subsidio</strong></h3>

        <div class="form-group">
            <label for="codigo">Código: </label>
            <input type="text" name="codigo" class="form-control">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="estrato">Estrato: </label>
            <select name="estrato" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor (COP): </label>
            <input type="text" name="valor" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Submit">Guardar</button>
        </div>

    </form>

@endsection
