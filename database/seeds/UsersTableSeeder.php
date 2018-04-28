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
        $names = [
            'Maritza',
            'Janessy',
            'Cristina',
            'Pamela',
            'Vanessa',
            'Sharida',
            'Yoselyn',
            'Milagros'
        ];
        $lastname =[
            'Ricaldi',
            'Astuhuaman',
            'Casachagua',
            'Quispe',
            'Mamani',
            'Chavez'

        ];
        for($i=1;$i<20;$i++){
            DB::table('users')->insert([
                'name' => $lastname[rand(0,5)]."".$lastname[rand(0,5)]."".$names[rand(0,7)],
                'email'=> "usuario".$i.'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        } 
    }
}
