@extends('main')

@section('body')
    <style>
        .limited-td td {
            max-height: 50px;
        }
    </style>

    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-outline-primary w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <h3 class="text-center"><strong>Departamentos</strong></h3>

    <div class="text-right">
        <a href="{{url('/departamentos/create')}}">
            <button class="rounded btn btn-success btn-lg">
                Añadir
            </button>
        </a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr class="limited-td">
            <td>Código</td>
            <td>Nombre</td>
            <td>Área</td>
            <td>Perímetro</td>
            <td>Hectáreas</td>
            <td>Tipo de Geometría</td>
        </tr>
        </thead>
        <tbody>
        @foreach($departamentos as $key => $value)
            <tr class="limited-td">
                <td>{{ $value->DPTO }}</td>
                <td>{{ $value->NOMBRE_DPT }}</td>
                <td>{{ $value->AREA }}</td>
                <td>{{ $value->PERIMETER }}</td>
                <td>{{ $value->HECTARES }}</td>
                <td>{{ $value->geometry['type'] }}</td>
                <td class="flex-lg-row flex-nowrap">
                <!--<a class="btn btn-small btn-warning" href="{{ URL::to('instituciones/' . $value->id . '/edit') }}">Editar</a>-->
                    <form class="d-inline" method="POST" action="{{url('instituciones/' . $value->id )}}"
                          accept-charset="UTF-8">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        {{--<button class="btn btn-small btn-danger" type="submit">Borrar</button>--}}
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection