@extends('main')

@section('body')
    <div style="position:absolute;top:5px;right: 10px;width: 50px;height: 50px">
        <a href="/">
            <button class="rounded-circle btn btn-outline-primary w-100 h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

    <h3 class="text-center"><strong>Subsidios</strong></h3>

    <div class="text-right">
        <a href="{{url('/subsidios/create')}}">
            <button class="rounded btn btn-success btn-lg">
                Añadir
            </button>
        </a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Código</td>
            <td>Nombre</td>
            <td>Estrato</td>
            <td>Valor (COP)</td>
        </tr>
        </thead>
        <tbody>
        @foreach($subsidios as $key => $value)
            <tr>
                <td>{{ $value->codigo }}</td>
                <td>{{ $value->nombre }}</td>
                <td>{{ $value->estrato }}</td>
                <td>{{ $value->valor }}</td>
                <td class="flex-lg-row flex-nowrap">
                    <a class="btn btn-small btn-warning" href="{{ URL::to('subsidios/' . $value->id . '/edit') }}">Editar</a>
                    <form class="d-inline" method="POST" action="{{url('subsidios/' . $value->id )}}"
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
