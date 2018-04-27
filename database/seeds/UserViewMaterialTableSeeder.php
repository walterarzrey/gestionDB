<?php

use Illuminate\Database\Seeder;

class UserViewMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i=1;$i<20;$i++){

    		DB::table('user_view_materials')->insert([
            'user_id' => rand(1,19),
            'material_id' => rand(1,19)
        ]); 
    		}
    }
}
