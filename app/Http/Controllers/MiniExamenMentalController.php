<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniExamenMentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return response()->json([
               'data' => [
                   [
                     'idFuncion'=>1,
                     'Nombre' => 'Estado de Conciencia',
                     'Opciones' => [
                        [ 'Id' =>'1',
                        'Valor'=>'Alerta'
                        ],
                        [
                         'Id'=>'2',
                         'Valor'=>'Somnolencia'   
                        ],
                        [
                          'Id'=>'3',
                          'Valor'=>'Estupor'  
                        ],
                        [
                            'Id'=>'4',
                            'Valor'=>'Coma'
                        ] 

                      ]
                    ],
                    [
                     'idFuncion'=>2,
                     'Nombre' => 'Orientación en esferas de:',
                     'Opciones' => [
                        [ 'Id' =>'3',
                        'Valor'=>'Persona'
                        ],
                        [
                        'Id'=>'4',
                        'Valor'=>'Espacio'   
                        ],
                        [
                         'Id'=>'5',
                         'Valor'=>'Tiempo'   
                        ] 
                      ]
                    ],
   
                ]
            ]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
