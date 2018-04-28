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
        DB::table('material_areas')->insert([
            'area_id' => rand(1,14),
            'material_id' => rand(1,14)
        ]);        
    }
}
