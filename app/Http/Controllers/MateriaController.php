<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();
        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $DATOS = request()->all();
        // return response()->json($DATOS);

        $request->validate([
            'nombre_create' => 'required|max:255|unique:materias,nombre',
        ]);

        $materias = new Materia();
        $materias->nombre = $request->nombre_create;
        $materias->save();

        return redirect()->route('admin.materias.index')
            ->with('mensaje', 'La materia se ha creado correctamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $validate = Validator::make($request->all(), [
           'nombre' => 'required|max:255|unique:materias,nombre,'.$id,
       ]);

       if($validate->fails()){
        return redirect()
        ->back()
        ->withErrors($validate)
        ->withInput()
        ->with('modal-id',$id);
       }

       $materia = Materia::find($id);
       $materia->nombre = $request->nombre;
       $materia->save();

       return redirect()->route('admin.materias.index')
           ->with('mensaje', 'La materia se ha actualizado correctamente')
           ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materia=Materia::find($id);
        $materia->delete();
        return redirect()->route('admin.materias.index')
        ->with('mensaje','La materia se ha eliminado')
        ->with('icono','success');
    }
}
