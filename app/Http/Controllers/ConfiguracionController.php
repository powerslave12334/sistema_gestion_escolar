<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index(){

        $jsonData= file_get_contents('https://api.hilariweb.com/divisas');
        $divisas = json_decode($jsonData,true);

        $configuracion = Configuracion::first();
        return view('admin.configuracion.index',compact('configuracion','divisas'));
    }

    public function store(Request $request){
        $request -> validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'divisa'=>'required',
            'correo_electronico'=>'required|email',
            'logo'=>'image|mimes:jpeg,png,jpg',
        ]);
        $configuracion = Configuracion::first();
        if($configuracion){
            $configuracion->nombre = $request->nombre;
            $configuracion->descripcion = $request->descripcion;
            $configuracion->direccion = $request->direccion;
            $configuracion->telefono = $request->telefono;
            $configuracion->divisa = $request->divisa;
            $configuracion->web = $request->web;
            $configuracion->correo_electronico = $request->correo_electronico;

            if($request -> hasFile('logo')){
                if($configuracion->logo){
                    unlink(public_path($configuracion->logo));
                }
                $logoPath = $request->file('logo');
                $nombreArchivo = time().'_'. $logoPath->getClientOriginalName();
                $rutaDestino=public_path('uploads/Logos');
                $logoPath->move($rutaDestino,$nombreArchivo);
                $configuracion->logo ='uploads/logos/' . $nombreArchivo;
            }
            $configuracion->save();
            return redirect()->route('admin.configuracion.index')->with('succes','Configuracion actualizada correctamente');
        }else{
            $configuracion = new Configuracion();
            $configuracion->nombre = $request->nombre;
            $configuracion->descripcion = $request->descripcion;
            $configuracion->direccion = $request->direccion;
            $configuracion->telefono = $request->telefono;
            $configuracion->divisa = $request->divisa;
            $configuracion->correo_electronico = $request->correo_electronico;

            if($request->hasFile('logo')){
                $logoPath = $request->file('logo');
                $nombreArchivo = time().'_'. $logoPath->getClientOriginalName();
                $rutaDestino=public_path('uploads/Logos');
                $logoPath->move($rutaDestino,$nombreArchivo);
                $configuracion->logo ='uploads/logos/' . $nombreArchivo;
            }
            $configuracion->save();
            return redirect()->route('admin.configuracion.index')->with('succes'.'configuracion creada correctamente.');
        }
    }
}
