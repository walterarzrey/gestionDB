<?php

use Illuminate\Database\Seeder;

class MaterialAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){

    		DB::table('material_areas')->insert([
            'area_id' => rand(1,19),
            'material_id' => rand(1,19)
        ]); 
    		}
    }
}
