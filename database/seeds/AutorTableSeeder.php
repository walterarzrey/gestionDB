<?php

use Illuminate\Database\Seeder;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++){
            DB::table('authors')->insert([
                'author' => 'Autor '.rand(1,4),
            ]);
        }
    }
}
