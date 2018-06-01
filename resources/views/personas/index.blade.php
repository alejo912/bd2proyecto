@extends('main')

@section('body')
    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-outline-primary w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <h3 class="text-center"><strong>Personas</strong></h3>

    <div class="text-right">
        <a href="{{url('/personas/create')}}">
            <button class="rounded btn btn-success btn-lg">
                Añadir
            </button>
        </a>
    </div>

@endsection