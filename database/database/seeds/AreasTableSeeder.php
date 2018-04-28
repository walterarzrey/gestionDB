<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            'Área de Servicios',
            'Área de Selección',
            'Área de Adquisiciones',
            'Área de Procesos Técnicos ',
            'Mediateca',
            'Ludoteca',
            'Área de acervo general ',
            'Espacios comunes '
        ];
        for($i=1;$i<8;$i++){
            DB::table('areas')->insert([
                'area' => $areas[rand(0,7)],
                ]);
        }
    }
}
