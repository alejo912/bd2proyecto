@extends('main')

@section('body')
    <div class="top-nav">
        <a href="{{url('/bancos')}}">
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

    <form method="POST" action="{{url('/bancos')}}" accept-charset="UTF-8">
        @csrf
        <h3 class="text-center"><strong>Banco</strong></h3>

        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Submit">Guardar</button>
        </div>

    </form>
@endsection