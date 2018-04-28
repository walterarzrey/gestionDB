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
        $autor=[
            'Vargas Llosa',
            'Cesar Vallejo',
            'Robert Downey',
            'Dante Alegeri',
            'Franz Kafka',
            'Paulo Coelho',
            'Ivan Manez'
        ];
        for($i=1 ; $i<=10 ; $i++){
            DB::table('authors')->insert([
                'author' => $autor[rand(0,6)],
            ]);
        }
    }
}
