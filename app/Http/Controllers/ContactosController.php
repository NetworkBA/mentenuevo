<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacto;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = contacto::all();
        return $contactos; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        contacto::create([ 'id_tipo'=>$r->id_tipo,
                            'nombre'=>  $r->nombre,
                            'email'=>   $r->email,
                            'mensaje'=> $r->mensaje]);

       return back()->with('success','Se han enviado tus datos de contacto.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = contacto::find($id);
        return $contacto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = contacto::find($id);
        //return view('contactoEditar',compact($contacto));
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
        $contacto = contacto::find($id);

        $contacto->nombre = $request->nombre;
        $contacto->id_tipo = $request->id_tipo;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
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
        return back()->with('success','Se ha eliminado el contacto con id $id.');

    }
}
