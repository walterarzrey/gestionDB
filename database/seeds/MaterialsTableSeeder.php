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
            'Advanced Physics',
            'SQL Server 2012',
            'Java',
            'All Linux',
            'Phyton',
            'C++',
        ];
        for($i=1;$i<=20;$i++){
        DB::table('materials')->insert([
        'title' => $titles[rand(0,5)],
        'language_id' => rand(1,9),
        ]);
        }
    }
}
