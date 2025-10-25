<?php

namespace App\Http\Controllers;

use App\Models\Personals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($tipo)
    {
        // echo "Tipo de personal: " . $tipo;
        $personals = Personals::where('tipo', $tipo)->get();
        return view('admin.personal.index', compact('personals', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tipo)
    {
        $roles = Role::all();
        return view('admin.personal.create', compact('tipo', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datos = $request->all();
        // return response()->json($datos);

        $request->validate([
            'foto' => 'required',
            'rol' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:personals',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'profesion' => 'required',
            'email' => 'required|unique:users',
            'direccion' => 'required',
            'tipo' => 'required',
        ]);
        
        $usuario = new User();
        $usuario->name = $request->nombre . ' ' . $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->ci); // Contraseña por defecto
        $usuario->save();

        $usuario->assignRole($request->rol);
        
        $personal = new Personals();
        $personal->usuario_id = $usuario->id;
        $personal->tipo = $request->tipo;
        $personal->nombre = $request->nombre;
        $personal->apellidos = $request->apellidos;
        $personal->ci = $request->ci;
        $personal->fecha_nacimiento = $request->fecha_nacimiento;
        $personal->direccion = $request->direccion;
        $personal->telefono = $request->telefono;
        $personal->profesion = $request->profesion;

        $fotoPath = $request->file('foto');
        $nombreArchivo = time().'_'. $fotoPath->getClientOriginalName();
        $rutaDestino=public_path('uploads/fotos');
        $fotoPath->move($rutaDestino,$nombreArchivo);
        $personal->foto ='uploads/fotos/' . $nombreArchivo;

        $personal->save();

        return redirect()->route('admin.personal.index', $request->tipo)
        ->with('mensaje', 'Personal creado exitosamente.')
        ->with('icono', 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Personals $personals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personals $personals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personals $personals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personals $personals)
    {
        //
    }
}
