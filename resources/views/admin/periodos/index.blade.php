@extends('adminlte::page')

@section('content_header')
    <h1>Listado de Periodos Academicos</h1>
    <hr>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Periodos registrados</h3>

                    <div class="card-tools">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">
                            Crear nuevo periodo
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #007bff; color:white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Registro de Periodo Academico</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('/admin/periodos/create') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">gestiones</label><b>(*)</b>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-university"></i></span>
                                                            </div>
                                                            <select class="form-control" name="gestion_id_create" required
                                                                id="gestion_id_create">
                                                                <option value="">Seleccione una gestion</option>
                                                                @foreach ($gestiones as $gestion)
                                                                    <option value="{{ $gestion->id }}">
                                                                        {{ $gestion->nombre }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('gestion_id_create')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Nombre del periodo</label><b>(*)</b>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-layer-group"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="nombre_create"
                                                                value="{{ old('nombre_create') }}"
                                                                placeholder="Escriba aqui...." required>
                                                        </div>
                                                        @error('nombre_create')
                                                            <small>{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <table id="" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gestion</th>
                                <th>Periodo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                                <tr>
                                    <td>{{ $gestion->id }}</td>
                                    <td>{{ $gestion->nombre }}</td>
                                    <td>
                                        @foreach ($gestion->periodos as $periodo)
                                            <span class="badge badge-info">{{ $periodo->nombre }}</span><br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($gestion->periodos as $periodo)
                                            <div class="row d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#ModalUpdate{{ $periodo->id }}">
                                                    <i class="fas fa-pencil-alt"></i> Editar
                                                </button>
                                                <div class="modal fade" id="ModalUpdate{{ $periodo->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-success"
                                                                style="background-color: #007bff; color:white;">
                                                                <h5 class="modal-title" id="exampleModalLabel">Editar
                                                                    periodo
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('/admin/periodos/' . $periodo->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="">gestiones</label><b>(*)</b>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i
                                                                                                class="fas fa-university"></i></span>
                                                                                    </div>
                                                                                    <select class="form-control"
                                                                                        name="gestion_id" required
                                                                                        id="gestion_id">
                                                                                        <option value="">Seleccione
                                                                                            una gestion</option>
                                                                                        @foreach ($gestiones as $gestion)
                                                                                            <option
                                                                                                value="{{ $gestion->id }}"{{ $gestion->id == $periodo->gestion_id ? 'selected' : '' }}>
                                                                                                {{ $gestion->nombre }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                @error('gestion_id')
                                                                                    <small>{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del
                                                                                    nivel</label><b>(*)</b>
                                                                                <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i
                                                                                                class="fas fa-layer-group"></i></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="nombre"
                                                                                        value="{{ old('nombre', $periodo->nombre) }}"
                                                                                        placeholder="Escriba aqui...."
                                                                                        required>
                                                                                </div>
                                                                                @error('nombre')
                                                                                    <small>{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Actualizar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <form action="{{ url('/admin/periodos/' . $periodo->id) }}"
                                                    method="post" id="miFormulario{{ $periodo->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="preguntar{{ $periodo->id }}(event)">
                                                        <i class="fas fa-trash"></i> Eliminar
                                                    </button>
                                                </form>

                                                <script>
                                                    function preguntar{{ $periodo->id }}(event) {
                                                        event.preventDefault();

                                                        Swal.fire({
                                                            title: '¿Desea eliminar este registro?',
                                                            text: '',
                                                            icon: 'question',
                                                            showDenyButton: true,
                                                            confirmButtonText: 'Eliminar',
                                                            confirmButtonColor: '#a5161d',
                                                            denyButtonColor: '#270a0a',
                                                            denyButtonText: 'Cancelar',
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // JavaScript puro para enviar el formulario
                                                                document.getElementById('miFormulario{{ $periodo->id }}').submit();
                                                            }
                                                        });
                                                    }
                                                </script>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                @if (session('modal_id'))
                    $('#ModalUpdate{{ session('modal_id') }}').modal('show');
                @else
                    $('#ModalCreate').modal('show');
                @endif
            });
        </script>
    @endif
@stop
