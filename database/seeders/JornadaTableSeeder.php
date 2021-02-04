<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jornada;

class JornadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {/*
        $Jornadas=[
            'Mañana',
            'Tarde',
            'noche',
            'Fin De Semana'
        ];

        foreach($Jornadas as $Jornada){

            Jornada::create([
                $jornada;
            ]);
        }*/
        Jornada::create([
            'nombre'=>'Mañana'
        ]);
        Jornada::create([
            'nombre'=>'Tarde'
        ]);
        Jornada::create([
            'nombre'=>'noche'
        ]);
        Jornada::create([
            'nombre'=>'Fin De Semana'
        ]);
    }
}
