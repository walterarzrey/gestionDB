<?php

use Illuminate\Database\Seeder;

class LanguajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++) {
            DB::table('authors')->insert([
                'author' => "Autor nro".$i,
                'author' => "Auto nro".$i,
                //'author' => rand(1, 4),
                'user_id' => $i
            ]);
        }
    }
}
