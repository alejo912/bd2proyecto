@extends('main')

@section('body')
    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-danger w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <form method="POST" action="{{url('/instituciones')}}" accept-charset="UTF-8">
        @csrf
        <h3 class="text-center"><strong>Institución Educativa</strong></h3>

        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Tipo: </label>
            <select name="tipo" class="form-control">
                <option value="0">Básica primaria</option>
                <option value="1">Secundaria</option>
                <option value="2">Superior</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Submit">Guardar</button>
        </div>

    </form>

@endsection
