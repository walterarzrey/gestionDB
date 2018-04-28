<?php

use Illuminate\Database\Seeder;

class MaterialTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matetype = [
            'tela',
            'carton',
            'periodico',
            'bond ',
            'papel cuche'
        ];
        for($i=1;$i<20;$i++){
            DB::table('material_types')->insert([
                'type' => $matetype[rand(0,4)],
                ]);
        }
    }
}
