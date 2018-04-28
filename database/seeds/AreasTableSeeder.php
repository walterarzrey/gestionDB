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
            'Chemistry',
            'Maths',
            'Physics',
            'Programing',
            'History',
        ];
        for($i=1;$i<=8;$i++){
        DB::table('areas')->insert([
        'area' => $areas[rand(0,4)],
        ]);
        }
    }
}
