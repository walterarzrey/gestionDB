<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas=[
            'Science',
            'Maths',
            'Physics',
            'Programing',
            'IRL',
        ];
        for($i=1;$i<=10;$i++){
        DB::table('areas')->insert([
        'area' => $areas[rand(0,4)],
    ]);
        }
    }
}
