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
        $names=[
            'Piero',
            'Juan',
            'Marco',
            'Marcos',
            'Guadalupe',
            'Nohelia',
            'Joysi',
            'Luis',
            'Allen',
        ];
        $lastname=[
            'Taipe',
            'Bastidas',
            'Cardenas',
            'Quispe',
            'Tara',
            'Blas',
            'Travesaño',
        ];
        for($i=1;$i<=20;$i++){
        DB::table('users')->insert([
        'name' => $lastname[rand(0,6)] . " " . $lastname[rand(0,6)]. " " .$names[rand(0,8)],
        'email' => "usuario".$i.'@gmail.com',
        'password' => bcrypt('usuario'),
    ]);
        }
    }
}
