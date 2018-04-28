<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lingo = [
            'Español',
            'Ingles',
            'Frances',
            'Portugues',
            'Italiano',
            'Ruso'
        ];
        
        for($i=1;$i<20;$i++){
            DB::table('languages')->insert([
                'language' => $lingo[rand(0,5)]
            ]); 
        } 
    }
}
