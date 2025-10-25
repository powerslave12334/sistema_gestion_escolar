@extends('adminlte::page')

@section('content_header')
    <h1>Listado del personal {{ $tipo }}</h1>
    <hr>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Personal registrado</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/personal/create/'.$tipo) }}" class="btn btn-primary">Crear nuevo Personal</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <body>
                            @foreach ($personals as $personal)
                                <tr>
                                    <td>{{ $personal->id }}</td>
                                    <td>{{ $personal->name }}</td>
                                    <td>
                                        <a href="{{ url('admin/personal/' . $personal->id . '/edit') }}"
                                            class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Editar</a>

                                        <form action="{{ url('/admin/personal/' . $personal->id) }}" method="post"
                                            id="miFormulario{{ $personal->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="preguntar{{ $personal->id }}(event)">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>

                                        <script>
                                            function preguntar{{ $personal->id }}(event) {
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
                                                        document.getElementById('miFormulario{{ $personal->id }}').submit();
                                                    }
                                                });
                                            }
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        </body>
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


@stop
