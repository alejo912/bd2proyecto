@extends('main')

@section('body')
    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-outline-primary w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <h3 class="text-center"><strong>Residencias</strong></h3>

    <div class="text-right">
        <a href="{{url('/residencias/create')}}">
            <button class="rounded btn btn-success btn-lg">
                Añadir
            </button>
        </a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Dirección</td>
            <td>Barrio</td>
            <td>Municipio</td>
            <td>Estrato</td>
            <td>Tipo</td>
            <td>Código</td>
            <td>Ubicación geográfica</td>
            <td>Subsidio</td>
        </tr>
        </thead>
        <tbody>
        @foreach($residencias as $key => $value)
            <tr>
                <td>{{ $value->direccion }}</td>
                <td>{{ $value->barrio }}</td>
                <td>{{ $value->municipio }}</td>
                <td>{{ $value->estrato }}</td>
                <td>{{ ($value->tipo==0)?'Propia':'Alquilada'}}</td>
                <td>{{ $value->codigo }}</td>
                <td>{{ json_encode($value->gps) }}</td>
                <td>
                    @if(isset($value->subsidio))
                        Nombre: {{(json_decode($value->subsidio))->nombre}}
                        <br>
                        Valor (COP): {{(json_decode($value->subsidio))->valor}}
                    @endif
                </td>
                <td class="flex-lg-row flex-nowrap">
                <!--<a class="btn btn-small btn-warning" href="{{ URL::to('residencias/' . $value->id . '/edit') }}">Editar</a>-->
                    <form class="d-inline" method="POST" action="{{url('residencias/' . $value->id )}}"
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