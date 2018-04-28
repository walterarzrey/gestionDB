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
        for($i=1;$i<20;$i++){
            DB::table('material_authors')->insert([
                'material_id' => rand(1,14),
                'author_id' => $i
            ]);
        }
    }
}
