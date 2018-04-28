<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        $names = [
            'Maritza',
            'Jeofry',
            'Luis',
            'Carlos',
            'Fiorela',
            'Sacha',
            'Janessy',
            'Milagros'
        ];
        $lastname = [
            'Tenorio',
            'Ricaldi',
            'Palacios',
            'Mamani',
            'Quispe',
            'Sosa'
        ];
        for($i=1;$i<20;$i++){
            DB::table('users')->insert([
                'name' => $lastname[rand(0,5)]." ".$lastname[rand(0,5)]." ".$names[rand(0,7)],
                'email' => "usuario".$i.'@gmail.com',
                'password' => bcrypt('usuario'),
            ]);
        }
>>>>>>> origin/dev
    }
}
