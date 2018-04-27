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
            'Manuel Torres Roman',
            'Bernard Kolman',
            'Robert Busby',
            'Sharon Ross',
            'Erick Coronel',
            'Leheman',
        ];
        for($i=1;$i<=10;$i++){
        DB::table('authors')->insert([
        'author' => $authorn[rand(0,5)],
    ]);
        }
    }
}
