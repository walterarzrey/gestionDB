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
        for($i=1;$i<=4;$i++){
            DB::table('user_view_materials')->insert([
                'title_id' => 'Titulo '.$i,
                'user_id'   =>  $i
                ]);
        }  
    }
}
