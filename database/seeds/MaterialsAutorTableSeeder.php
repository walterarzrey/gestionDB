<?php

use Illuminate\Database\Seeder;

class MaterialsAutorTableSeeder extends Seeder
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
                'title_id' => 'Titulo '.$i,
                'author_id' => 'Autor '.$i,
                ]);
        }
    }
}
