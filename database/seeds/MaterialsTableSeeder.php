<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles=[
            'Progra',
            'Circuitos',
            'Redes',
            'Creatividad',
            'Lenguajes',
            'Piramides',
        ];
        for($i=1;$i<=20;$i++){
        DB::table('materials')->insert([
        'title' => $titles[rand(0,5)],
        'language_id' => rand(1,9),
    ]);
        }
    }
}
