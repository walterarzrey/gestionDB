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
        for($i=1;$i<15;$i++){
            DB::table('materials')->insert([
                'title' => 'titulo '.$i,
                'language_id' => $i
            ]);
        } 
    }
}
