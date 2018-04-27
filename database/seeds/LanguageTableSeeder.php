<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$languages=[
    			'Español',
    			'Aleman',
    			'Ingles',
    			'Italiano',
    			'Japones',
    			'Ruso',
    			'Chino'
    		];
        for($i=0;$i<7;$i++){

    		DB::table('languages')->insert([
    		'id'=>($i+1),
            'language' => $languages[$i]
        ]);
    		}
    }
}
