<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorn=[
            'Juan George',
            'Luis Berth',
            'Abraham Cesped',
            'Rosa Marquez',
            'Marco Lito',
            'Jose Rodriguez',
        ];
        for($i=1;$i<=10;$i++){
        DB::table('authors')->insert([
        'author' => $authorn[rand(0,5)],
    ]);
        }
    }
}
