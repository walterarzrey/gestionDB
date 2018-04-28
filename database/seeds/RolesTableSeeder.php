<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
=======
        for($i=1;$i<=4;$i++){
            DB::table('roles')->insert([
                'name' => 'Rol '.$i,
            ]);
        }
>>>>>>> origin/dev
    }
}
