<?php

use Illuminate\Database\Seeder;

class BookCases_MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=1;$i<20;$i++){

    		DB::table('bookcase_materials')->insert([
            'bookcase_id' => rand(1,19),
            'material_id' => rand(1,19)
        ]); 
    		}
    }
}
