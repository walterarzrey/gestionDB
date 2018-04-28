<?php

use Illuminate\Database\Seeder;

class UserViewMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
    		DB::table('user_view_materials')->insert([
            'material_id' => rand(1,6),
            'user_id' => rand(1,8),
            ]);
    	}
    }
}
