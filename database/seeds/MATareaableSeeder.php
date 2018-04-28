<?php

use Illuminate\Database\Seeder;

class MATareaableSeeder extends Seeder
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
                'area_id' => '00'.$i,
                'material_id' => '00'.$i,
            ]);
    }}
}
