<?php

use Illuminate\Database\Seeder;

class MatAutorTableSeeder extends Seeder
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
                'material_id' => '00'.$i,
                'author_id' => '00'.$i
            ]);
    }
    }
}
