<?php

use Illuminate\Database\Seeder;

class MaterialAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++){
    		DB::table('material_authors')->insert([
            'material_id' => rand(1,4),
            'author_id' => $i
        ]);
    		}
    }
}
