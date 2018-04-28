<?php

use Illuminate\Database\Seeder;

class BookcasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbook=[
            'Espinoza',
            'La Casa Amarilla',
            'Bases de Vida',
            'Lo Cotidiano',
            'Casa Blanca',
            'Buenaventura',
            'Casa Verde',
            'Libertad y Vida',

        ];
        for($i=1;$i<=15;$i++){
        DB::table('bookcases')->insert([
        'name' => $nbook[rand(0,7)],
        'user_id' => $i,
    ]);
        }
    }
}
