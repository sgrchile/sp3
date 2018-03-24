@extends('layouts.app')
@section('content')
    <div class="container">
        @if ('success')
            <div class="alert alert-success" data-dismiss="alert" aria-label="Close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                registro exitoso.
            </div>
        @else
            <div class="alert alert-warning" data-dismiss="alert" aria-label="Close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                Error al registrar.
            </div>
        @endif
    </div>
    <td><a href="{{route('regCliente')}}"><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;"> Volver a registro</button></a></td>
    <td><a href="{{route('listaCli')}}"><button class='btn btn-primary btn-lg' style="width:185px; margin-bottom: 15px;">Volver a CRM</button></a></td>
@endsection