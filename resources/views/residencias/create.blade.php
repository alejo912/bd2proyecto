@extends('main')

@section('body')
    <div class="top-nav">
        <a href="{{url('/residencias')}}">
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

    <form method="POST" action="{{url('/residencias')}}" accept-charset="UTF-8">
        @csrf
        <h3 class="text-center"><strong>Residencia</strong></h3>

        <div class="form-group">
            <label for="direccion">Dirección: </label>
            <input type="text" name="direccion" class="form-control">
        </div>
        <div class="form-group">
            <label for="barrio">Barrio: </label>
            <input type="text" name="barrio" class="form-control">
        </div>
        <div class="form-group">
            <label for="municipio">Municipio: </label>
            <input type="text" name="municipio" class="form-control">
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
            <label for="tipo">Tipo: </label>
            <select name="tipo" class="form-control">
                <option value="0">Propia</option>
                <option value="1">Alquilada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="codigo">Código: </label>
            <input type="text" name="codigo" class="form-control">
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación Geográfica: </label>
            <br>
            <label for="latitud">Latitud: </label>
            <input type="text" name="latitud" class="form-control">
            <label for="longitud">Longitud: </label>
            <input type="text" name="longitud" class="form-control">
        </div>
        <div class="form-group">
            <label for="subsidio">Subsidio: </label>
            <select name="subsidio" class="form-control">
                <option value="-1">Ninguno</option>
                @foreach ($subsidios as $sub)
                    <option value="{{$sub->_id}}">{{$sub->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Submit">Guardar</button>
        </div>

    </form>

@endsection