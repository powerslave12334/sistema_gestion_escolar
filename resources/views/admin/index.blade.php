@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>Bienvenido:</b> {{ Auth::user()->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/colegio.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Gestiones</span>
                    <span class="info-box-number">{{ $total_gestiones }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/calendario.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Periodos</span>
                    <span class="info-box-number">{{ $total_periodos }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/lista.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Niveles</span>
                    <span class="info-box-number">{{ $total_niveles }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/usuario.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Grados</span>
                    <span class="info-box-number">{{ $total_grados }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/usuario-de-telefono.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Paralelos</span>
                    <span class="info-box-number">{{ $total_paralelos }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/dormir.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Turnos</span>
                    <span class="info-box-number">{{ $total_turnos }}</span>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/libro-abierto.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">Materias</span>
                    <span class="info-box-number">{{ $total_materias }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <img src="{{ url('/img/usuario_rol.gif') }}" width="70px" alt="">
                <div class="info-box-content">
                    <span class="info-box-text">roles</span>
                    <span class="info-box-number">{{ $total_roles }}</span>
                </div>
            </div>
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
