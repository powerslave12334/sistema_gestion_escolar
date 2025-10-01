@extends('adminlte::page')

@section('content_header')
    <h1><b>Listado de gestiones educativas</b></h1>
    <hr>
    <a href="{{ url('/admin/gestiones/create') }}" class="btn btn-primary">Crear nueva gestion</a>
    <hr>
@stop

@section('content')

    <div class="row">


        @foreach ($gestiones as $gestion)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box zoomP">
                    <img src="{{ url('/img/calendario.gif') }}" alt="" width="70px">
                    <div class="info-box-content">
                        <span class="info-box-text"><b>Gestiones Educativa</b></span>
                        <span class="info-box-number">{{ $gestion->nombre }}</span>
                        <div class="row">
                            <a href="{{ url('/admin/gestiones/' . $gestion->id . '/edit') }}"
                                class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
