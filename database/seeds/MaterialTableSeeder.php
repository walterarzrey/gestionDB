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
        for($i=1;$i<=4;$i++){
            DB::table('materials')->insert([
                'title' => 'Titulo '.$i,
                'language_id'=> 'languaje '.$i,
            ]);
        }
    }
}
