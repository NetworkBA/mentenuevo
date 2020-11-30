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


            return response()->json(json_decode('{
                "data": [
                  {
                    "IdFuncion": 1,
                    "Nombre": "Estado de Conciencia",
                    "Opciones": [
                      {
                        "Id": "1",
                        "Valor": "Alerta"
                      },
                      {
                        "Id": "2",
                        "Valor": "Somnolencia"
                      },
                      {
                        "Id": "3",
                        "Valor": "Estupor"
                      },
                      {
                        "Id": "4",
                        "Valor": "Coma"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 2,
                    "Nombre": "Orientación en esferas de:",
                    "Opciones": [
                      {
                        "Id": "5",
                        "Valor": "Persona"
                      },
                      {
                        "Id": "6",
                        "Valor": "Espacio"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 3,
                    "Nombre": "Atención/Concentración",
                    "Opciones": [
                      {
                        "Id": "8",
                        "Valor": "Adecuada para la edad"
                      },
                      {
                        "Id": "9",
                        "Valor": "Dispersa"
                      },
                      {
                        "Id": "10",
                        "Valor": "Atención Selectiva"
                      },
                      {
                        "Id": "11",
                        "Valor": "Atención Sostenida"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 4,
                    "Nombre": "Lenguaje verbal",
                    "Opciones": [
                      {
                        "Id": "12",
                        "Valor": "Coherente(con ilación)"
                      },
                      {
                        "Id": "13",
                        "Valor": "Congruente(de acuerdo a la realidad)"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 5,
                    "Nombre": "Forma y curso del habla",
                    "Opciones": [
                      {
                        "Id": "14",
                        "Valor": "Nomal o fluido"
                      },
                      {
                        "Id": "15",
                        "Valor": "Tartamudeo"
                      },
                      {
                        "Id": "16",
                        "Valor": "Mutismo selectivo"
                      },
                      {
                        "Id": "17",
                        "Valor": "Bradilalia(lentitud)"
                      },
                      {
                        "Id": "18",
                        "Valor": "Verborreico(rápido)"
                      },
                      {
                        "Id": "19",
                        "Valor": "Coprolálico"
                      },
                      {
                        "Id": "20",
                        "Valor": "Ecolálico"
                      },
                      {
                        "Id": "21",
                        "Valor": "Monosílabo"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 6,
                    "Nombre": "Volumen del habla",
                    "Opciones": [
                      {
                        "Id": "22",
                        "Valor": "Nomal"
                      },
                      {
                        "Id": "23",
                        "Valor": "Aumentado"
                      },
                      {
                        "Id": "24",
                        "Valor": "Disminuido"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 7,
                    "Nombre": "Tipo de pensamiento",
                    "Opciones": [
                      {
                        "Id": "25",
                        "Valor": "Abstracto"
                      },
                      {
                        "Id": "26",
                        "Valor": "Funcional"
                      },
                      {
                        "Id": "27",
                        "Valor": "Concreto"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 8,
                    "Nombre": "Contenido del pensamiento(Ideas)",
                    "Opciones": [
                      {
                        "Id": "28",
                        "Valor": "Suicida"
                      },
                      {
                        "Id": "29",
                        "Valor": "Homicida"
                      },
                      {
                        "Id": "30",
                        "Valor": "Culpa"
                      },
                      {
                        "Id": "31",
                        "Valor": "Obsesivo"
                      },
                      {
                        "Id": "32",
                        "Valor": "Delirante"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 9,
                    "Nombre": "Rieso de auto-agresión",
                    "Opciones": [
                      {
                        "Id": "33",
                        "Valor": "Ninguno"
                      },
                      {
                        "Id": "34",
                        "Valor": "Cutting"
                      },
                      {
                        "Id": "35",
                        "Valor": "Ideas suicidas"
                      },
                      {
                        "Id": "36",
                        "Valor": "Planeación suicida"
                      },
                      {
                        "Id": "37",
                        "Valor": "Intento suicida"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 10,
                    "Nombre": "Curso del pensamiento",
                    "Opciones": [
                      {
                        "Id": "38",
                        "Valor": "Normal"
                      },
                      {
                        "Id": "39",
                        "Valor": "Intrusivo"
                      },
                      {
                        "Id": "40",
                        "Valor": "Tangencial (detallado)"
                      },
                      {
                        "Id": "41",
                        "Valor": "Disociado (desconectado)"
                      },
                      {
                        "Id": "42",
                        "Valor": "Taquipsquia"
                      },
                      {
                        "Id": "43",
                        "Valor": "Bradipsiquia"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 11,
                    "Nombre": "Afecto",
                    "Opciones": [
                      {
                        "Id": "44",
                        "Valor": "Deprimido"
                      },
                      {
                        "Id": "45",
                        "Valor": "Facies de tristeza"
                      },
                      {
                        "Id": "46",
                        "Valor": "Llanto"
                      },
                      {
                        "Id": "47",
                        "Valor": "Irritable"
                      },
                      {
                        "Id": "48",
                        "Valor": "Ansioso"
                      },
                      {
                        "Id": "49",
                        "Valor": "Movimientos"
                      },
                      {
                        "Id": "50",
                        "Valor": "Estereotipados"
                      },
                      {
                        "Id": "51",
                        "Valor": "Onicofagia"
                      },
                      {
                        "Id": "52",
                        "Valor": "Eutimico"
                      },
                      {
                        "Id": "53",
                        "Valor": "Eufórico"
                      },
                      {
                        "Id": "54",
                        "Valor": "Temeroso"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 12,
                    "Nombre": "Estructura del pensamiento",
                    "Opciones": [
                      {
                        "Id": "55",
                        "Valor": "Lógico"
                      },
                      {
                        "Id": "56",
                        "Valor": "Ilógico"
                      },
                      {
                        "Id": "57",
                        "Valor": "Juicio (decisiones apropiadas al problema)"
                      },
                      {
                        "Id": "58",
                        "Valor": "Alterado"
                      },
                      {
                        "Id": "59",
                        "Valor": "Adecuado"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 13,
                    "Nombre": "Estructura del pensamiento",
                    "Opciones": [
                      {
                        "Id": "60",
                        "Valor": "Normal"
                      },
                      {
                        "Id": "61",
                        "Valor": "Arriba del promedio"
                      },
                      {
                        "Id": "62",
                        "Valor": "Abajo del promedio"
                      },
                      {
                        "Id": "63",
                        "Valor": "Retraso mental"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 14,
                    "Nombre": "Expresión Facial",
                    "Opciones": [
                      {
                        "Id": "64",
                        "Valor": "Inexpresiva"
                      },
                      {
                        "Id": "65",
                        "Valor": "Acorde a la emoción"
                      },
                      {
                        "Id": "66",
                        "Valor": "Aplanado"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 15,
                    "Nombre": "Contacto visual",
                    "Opciones": [
                      {
                        "Id": "66",
                        "Valor": "Normal"
                      },
                      {
                        "Id": "67",
                        "Valor": "Evitativo"
                      },
                      {
                        "Id": "68",
                        "Valor": "Intenso"
                      },
                      {
                        "Id": "69",
                        "Valor": "Nulo"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 16,
                    "Nombre": "Actitud (posición)",
                    "Opciones": [
                      {
                        "Id": "70",
                        "Valor": "Libremente"
                      },
                      {
                        "Id": "71",
                        "Valor": "Escogida"
                      },
                      {
                        "Id": "72",
                        "Valor": "Rigida"
                      },
                      {
                        "Id": "73",
                        "Valor": "Encorvada"
                      },
                      {
                        "Id": "74",
                        "Valor": "Agitado"
                      },
                      {
                        "Id": "75",
                        "Valor": "Catatonia"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 17,
                    "Nombre": "Estado emocional",
                    "Opciones": [
                      {
                        "Id": "76",
                        "Valor": "Lábil o Inestable"
                      },
                      {
                        "Id": "77",
                        "Valor": "Estable"
                      },
                      {
                        "Id": "78",
                        "Valor": "Superficial"
                      },
                      {
                        "Id": "79",
                        "Valor": "Embotamiento"
                      },
                      {
                        "Id": "80",
                        "Valor": "Afectivo"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 18,
                    "Nombre": "Cooperador",
                    "Opciones": [
                      {
                        "Id": "81",
                        "Valor": "si"
                      },
                      {
                        "Id": "82",
                        "Valor": "no"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 19,
                    "Nombre": "Alteraciones sensoperceptuales (Alucinaciones)",
                    "Opciones": [
                      {
                        "Id": "81",
                        "Valor": "Ninguna"
                      },
                      {
                        "Id": "82",
                        "Valor": "*Táctiles"
                      },
                      {
                        "Id": "83",
                        "Valor": "Olfativas"
                      },
                      {
                        "Id": "84",
                        "Valor": "*Visuales"
                      },
                      {
                        "Id": "85",
                        "Valor": "Gustativas"
                      },
                      {
                        "Id": "86",
                        "Valor": "*Auditivas"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 20,
                    "Nombre": "Condiciones de Aliño",
                    "Opciones": [
                      {
                        "Id": "87",
                        "Valor": "Aliñado"
                      },
                      {
                        "Id": "88",
                        "Valor": "Desaliñado"
                      },
                      {
                        "Id": "89",
                        "Valor": "Excesivo"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 21,
                    "Nombre": "Condiciones generales de higiene",
                    "Opciones": [
                      {
                        "Id": "90",
                        "Valor": "Buenas"
                      },
                      {
                        "Id": "91",
                        "Valor": "Regulares"
                      },
                      {
                        "Id": "92",
                        "Valor": "Malas"
                      }
                    ]
                  },
                  {
                    "IdFuncion": 22,
                    "Nombre": "Edad de apariencia",
                    "Opciones": [
                      {
                        "Id": "93",
                        "Valor": "Similar a cronológica"
                      },
                      {
                        "Id": "94",
                        "Valor": "Mayor a cronológica"
                      },
                      {
                        "Id": "95",
                        "Valor": "Menor a cronológica"
                      }
                    ]
                  }
                ]
              }'));
         
    }

}
