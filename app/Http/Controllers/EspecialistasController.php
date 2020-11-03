<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\User;

class EspecialistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialistas = User::where('id',2)-get();
        dd($especialistas);

       // return $especialistas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('Especialistas.crear');

       return "formulario para crear especialista";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'              => $request->name,
            'id_tipo'           => $request->id_tipo,    
            'email'             => $request->email,
            'password'          => $request->password,
            'apellido'          => $request->apellido,
            'nacionalidad'      => $request->nacionalidad,
            'sexo'              => $request->sexo,
            'telefono'          => $request->telefono,
            'fecha_nacimiento'  => $request->fecha_nacimiento,
            'especialidad'      => $request->especialidad,
            'id_motivo'         => $request->id_motivo
        ]);
        return back()->with('success','Se han creado un nuevo Especialista.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialista = User::find($id);
        //dd($especialista);
        return $especialista;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialista = User::find($id);
        //dd($especialista);
        return view('Especialista.editar',compact('$especialista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $especialista = User::find($id);

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

        return back()->with('success','Se han actualizado los detos del Especialista.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return back()->with('success','Se ha eliminado el Especialista con id $id.');

    }
}
