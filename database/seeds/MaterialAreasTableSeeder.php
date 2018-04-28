<?php

use Illuminate\Database\Seeder;

class MaterialAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++){
    		DB::table('material_areas')->insert([
            'material_id' => rand(1,4),
            'area_id' => $i
        ]);
    		}
    }
}
