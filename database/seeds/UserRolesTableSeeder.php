<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){
            DB::table('user_roles')->insert([
                'role_id'   =>  rand(1,4),
                'user_id'   =>  $i
            ]);
        }
    }
}
