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
        $name_aut = [
            'Cristina',
            'Pamela',
            'Vanessa',
            'Sharida',
            'Yoselyn'
        ];
        $lastname = [
            'Pablo',
            'Gonzales',
            'Arias',
            'Villegas'
        ];
        
        for($i=1;$i<20;$i++){
            DB::table('authors')->insert([
                'author' => $name_aut[rand(0,4)]."".$lastname[rand(0,3)]."".$lastname[rand(0,3)]
            ]); 
        } 
    }
}
