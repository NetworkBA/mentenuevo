<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EspecialistasController extends Controller
{
    public function index()
    {
        $especialistas = User::where('id_tipo',2)->get();
        //dd($especialistas);

       // return view('Especialistas.index');
        return response()->json(['especialistas'=>$especialistas]);
    }

    public function create()
    {
       return view('Especialistas.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name'              => $request->name,
            'id_tipo'           => 2,    
            'email'             => $request->email,
            'password'          => $request->password,
            'apellido'          => $request->apellido,
            'nacionalidad'      => $request->nacionalidad,
            'sexo'              => $request->sexo,
            'telefono'          => $request->telefono,
            'fecha_nacimiento'  => $request->fecha_nacimiento,
            'especialidad'      => $request->especialidad,
        ]);
        //return back()->with('success','Se ha creado un nuevo Especialista.');
        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha creado un nuevo Especialista.']);
    }

    public function show($id)
    {
        $especialista = User::find($id);
        return response()->json(['especialista'=>$especialista]);
    }

    public function edit($id)
    {
        $especialista = User::find($id);
        //dd($especialista);
        return view('Especialistas.edit');
        //return view('Especialista.edit',compact(json(["especialista"=>$especialista])));
    }

    public function update(Request $request, $id)
    {
/*        $especialista = User::find($id);

        $especialista->name             = $request->name;
        $especialista->id_tipo          = $request->id_tipo;
        $especialista->email            = $request->email;
        $especialista->password         = $request->password;
        $especialista->apellido         = $request->apellido;
        $especialista->nacionalidad     = $request->nacionalidad;
        $especialista->sexo             = $request->sexo;
        $especialista->telefono         = $request->telefono;
        $especialista->fecha_nacimiento = $request->fecha_nacimiento;
        $especialista->especialidad     = $request->especialidad;
        $especialista->id_motivo        = $request->id_motivo;
        $especialista->save();
*/
        //return back()->with('success','Se han actualizado los detos del Especialista.');
 /*       return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se han actualizado los detos del Especialista.']);
  */ 
     return view('dashboard');
        }

    public function destroy($id)
    {
        $especialista = User::findOrFail($id);
        $especialista->delete();

        //return back()->with('success','Se ha eliminado el Especialista con id $id.');
        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha eliminado el Especialista con id $id.']);
    }
}
