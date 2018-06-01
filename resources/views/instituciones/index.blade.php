@extends('main')

@section('body')
    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-outline-primary w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <h3 class="text-center"><strong>Instituciones Educativas</strong></h3>

    <div class="text-right">
        <a href="{{url('/instituciones/create')}}">
            <button class="rounded btn btn-success btn-lg">
                Añadir
            </button>
        </a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Tipo</td>
        </tr>
        </thead>
        <tbody>
        @foreach($instituciones as $key => $value)
            <tr>
                <td>{{ $value->nombre }}</td>
                <td>{{ ($value->tipo==0)?'Básica primaria':(($value->tipo==1)?'Secundaria':'Superior')}}</td>
                <td class="flex-lg-row flex-nowrap">
                <!--<a class="btn btn-small btn-warning" href="{{ URL::to('instituciones/' . $value->id . '/edit') }}">Editar</a>-->
                    <form class="d-inline" method="POST" action="{{url('instituciones/' . $value->id )}}"
                          accept-charset="UTF-8">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-small btn-danger" type="submit">Borrar</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
