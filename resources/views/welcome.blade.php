@extends('main')

@section('body')
    <div class="text-center"><h3><strong>Oscar Alejandro López Paz</strong></h3>
        <div class="text-center"><h3><strong>Juan David Vallejo Restrepo</strong></h3>
            <h4>BD2</h4>
        </div>
        <br>
        <div class="flex-center flex-column flex-padding align-items-center">
            <a href="/subsidios">
                <button class="btn btn-danger btn-lg">
                    Subsidios
                </button>
            </a>
            <a href="/residencias">
                <button class="btn btn-info btn-lg">
                    Residencias
                </button>
            </a>
            <a href="/departamentos">
                <button class="btn btn-info btn-lg">
                    Departamentos
                </button>
            </a>
            <a href="/bancos">
                <button class="btn btn-info btn-lg">
                    Bancos
                </button>
            </a>
            <a href="/instituciones">
                <button class="btn btn-info btn-lg">
                    Instituciones
                </button>
            </a>
            <a href="/personas">
                <button class="btn btn-info btn-lg">
                    Personas
                </button>
            </a>
        </div>
@endsection