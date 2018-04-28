<?php

use Illuminate\Database\Seeder;

class BookcaseMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=8;$i++){
    		DB::table('bookcase_materials')->insert([
            'material_id' => rand(1,6),
            'bookcase_id' => $i
        ]);
    		}
    }
}
