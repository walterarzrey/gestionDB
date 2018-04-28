<?php

use Illuminate\Database\Seeder;

class BookcasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semestre = [
            'Primero',
            'Segundo',
            'Tercero',
            'Cuarto',
            'Quinto',
            'Sexto',
            'Septimo',
            'Octavo',
            'Noveno',
            'Decimo'
        ];
        
        for($i=1;$i<20;$i++){
            DB::table('bookcases')->insert([
                'name' => $semestre[rand(0,9)]." Semestre",
                'user_id' => $i
            ]); 
        } 
    }
}
