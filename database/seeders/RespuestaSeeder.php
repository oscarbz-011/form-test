<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pregunta 1
        Respuesta::create([

            'preguntas_id' =>1,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>1,
            'opcion' =>'no',

        ]);
        //pregunta 2
        Respuesta::create([

            'preguntas_id' =>2,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>2,
            'opcion' =>'no',

        ]);
        //pregunta 3
        Respuesta::create([

            'preguntas_id' =>3,
            'opcion' =>'mucho',

        ]);
        Respuesta::create([

            'preguntas_id' =>3,
            'opcion' =>'poco',

        ]);
        Respuesta::create([

            'preguntas_id' =>3,
            'opcion' =>'nada',

        ]);
        //pregunta 4
        Respuesta::create([

            'preguntas_id' =>4,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>4,
            'opcion' =>'no',

        ]);
        Respuesta::create([

            'preguntas_id' =>4,
            'opcion' =>'tal vez',

        ]);
        //pregunta 5
        Respuesta::create([

            'preguntas_id' =>5,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>5,
            'opcion' =>'no',

        ]);
        //pregunta 6
        Respuesta::create([

            'preguntas_id' =>6,
            'opcion' =>'facebook',

        ]);
        Respuesta::create([

            'preguntas_id' =>6,
            'opcion' =>'whatsApp',

        ]);
        Respuesta::create([

            'preguntas_id' =>6,
            'opcion' =>'instagram',

        ]);
        //pregunta 7
        Respuesta::create([

            'preguntas_id' =>7,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>7,
            'opcion' =>'no',

        ]);
        //pregunta 8
        Respuesta::create([

            'preguntas_id' =>8,
            'opcion' =>'mucho',

        ]);
        Respuesta::create([

            'preguntas_id' =>8,
            'opcion' =>'poco',

        ]);
        Respuesta::create([

            'preguntas_id' =>8,
            'opcion' =>'nada',

        ]);
        //pregunta 9
        Respuesta::create([

            'preguntas_id' =>9,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>9,
            'opcion' =>'no',

        ]);
        //pregunta 10
        Respuesta::create([

            'preguntas_id' =>10,
            'opcion' =>'seguro',

        ]);
        Respuesta::create([

            'preguntas_id' =>10,
            'opcion' =>'inseguro',

        ]);
        //pregunta 11
        Respuesta::create([

            'preguntas_id' =>11,
            'opcion' =>'transferencia bancaria',

        ]);
        Respuesta::create([

            'preguntas_id' =>11,
            'opcion' =>'tarjeta',

        ]);
        Respuesta::create([

            'preguntas_id' =>11,
            'opcion' =>'efectivo',

        ]);
        //pregunta 12
        /*
        Respuesta::create([

            'preguntas_id' =>12,
            'opcion' =>'si',

        ]);
        Respuesta::create([

            'preguntas_id' =>12,
            'opcion' =>'no',

        ]);*/

    }
}
