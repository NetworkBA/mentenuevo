<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PacientesController extends Controller
{

    public function index()
    {
        $pacientes = User::where('id_tipo',3)->get();

        return response()->json(['pacientes'=>$pacientes]);
    }

    public function create()
    {
      // return view('Paciente.crear');

       return "formulario para crear pacientes";
    }

    public function store(Request $request)
    {
        User::create([
            'name'              => $request->name,
            'id_tipo'           => 3,    
            'email'             => $request->email,
            'password'          => $request->password,
            'apellido'          => $request->apellido,
            'nacionalidad'      => $request->nacionalidad,
            'sexo'              => $request->sexo,
            'telefono'          => $request->telefono,
            'fecha_nacimiento'  => $request->fecha_nacimiento,
            'id_motivo'         => $request->id_motivo
        ]);
        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha creado un nuevo Paciente.']);
    }

    public function show($id)
    {
        $paciente = User::find($id);
        return response()->json(['paciente'=>$paciente]);
    }

    public function edit($id)
    {
        $paciente = User::find($id);
        return response()->json(['paciente'=>$paciente]);
    }

    public function update(Request $request, $id)
    {
        $paciente = User::find($id);

        $paciente->name             = $request->name;
        $paciente->email            = $request->email;
        $paciente->password         = $request->password;
        $paciente->apellido         = $request->apellido;
        $paciente->nacionalidad     = $request->nacionalidad;
        $paciente->sexo             = $request->sexo;
        $paciente->telefono         = $request->telefono;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->id_motivo        = $request->id_motivo;
        $paciente->save();

        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se han actualizado los detos del paciente.']);
    }

    public function destroy($id)
    {
        $paciente = User::findOrFail($id);
        $paciente->delete();
        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha eliminado el Paciente con id $id.']);
    }
}
