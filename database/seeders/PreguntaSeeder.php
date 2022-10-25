<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregunta::create([

            'nombre' => '¿Conoce acerca del comercio electrónico?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Utiliza aplicaciones de envios de productos?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Cuánto se incrementó su venta online a raíz del aislamiento social?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Seguirá utilizando este método de venta en un futuro?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Crees que la publicidad es beneficiosa?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Que tipo de herramientas tecnológicas utilizó para realizar publicidad de sus productos?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Se incrementaron sus ventas gracias a estas formas de publicidad?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Con que frecuencia realiza publicidad de sus productos?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Utiliza las transacciones digitales en su empresa?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Qué tan seguro se siente usted en el momento de hacer transacciones electrónicas?',
            'encuestas_id'=> 1,
        ]);
        Pregunta::create([

            'nombre' => '¿Cuáles son los métodos de transacciones que utiliza?',
            'encuestas_id'=> 1,
        ]);
        /*
        Pregunta::create([

            'nombre' => '',
            'encuestas_id'=> 1,
        ]);

        

        */

    }
}
