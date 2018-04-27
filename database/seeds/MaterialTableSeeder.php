<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=1;$i<20;$i++){

    		DB::table('materials')->insert([
            'title' => "title " . $i,
            'language_id' => rand(0,6)
        ]); 
    		}
    }
}
