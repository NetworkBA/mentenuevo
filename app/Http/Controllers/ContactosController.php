<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacto;

class ContactosController extends Controller
{

    public function index()
    {
        $contactos = contacto::all();
        return response()->json(["contactos"=>$contactos]); 
    }

    public function create()
    {
        return view('contacto');
    }

    public function store(Request $r)
    {
        contacto::create([ 'id_tipo'=>$r->id_tipo,
                            'nombre'=>  $r->nombre,
                            'email'=>   $r->email,
                            'mensaje'=> $r->mensaje]);

       //return back()->with('success','Se han enviado tus datos de contacto.');
       return response()->json([
                            'estatus' => 'Exitoso',
                            'mensaje' => 'Se han enviado tus datos de contacto.']);
    }

    public function show($id)
    {
        $contacto = contacto::find($id);
        return response()->json(['contacto'=>$contacto]);
    }

    public function edit($id)
    {
        $contacto = contacto::find($id);
        return response()->json(["contacto"=>$contacto]);
    }

    public function update(Request $request, $id)
    {
        $contacto = contacto::find($id);

        $contacto->nombre = $request->nombre;
        $contacto->id_tipo = $request->id_tipo;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha actualizado el contacto con id $id.']);  
    }

    public function destroy($id)
    {
        $contacto = contacto::findOrFail($id);
        $contacto->delete();

        return response()->json([
            'estatus' => 'Exitoso',
            'mensaje' => 'success','Se ha eliminado el contacto con id $id.']);
    }
}
