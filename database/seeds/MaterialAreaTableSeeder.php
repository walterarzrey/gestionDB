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
        for($i=1;$i<=4;$i++){
            DB::table('material_areas')->insert([
                'title_id' => 'Titulo '.$i,
                'area_id' => 'Autor '.$i,
                ]);
        }
    }
}
