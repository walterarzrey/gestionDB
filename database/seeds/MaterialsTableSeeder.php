<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles=[
            'SQL SERVER 2014',
            'Advanced Maths',
            'Java',
            'All Linux',
            'Phyton',
            'Analitic Geometry',
        ];
        for($i=1;$i<=20;$i++){
        DB::table('materials')->insert([
        'title' => $titles[rand(0,5)],
        'language_id' => rand(1,9),
    ]);
        }
    }
}
