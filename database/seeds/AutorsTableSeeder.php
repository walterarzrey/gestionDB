<?php

use Illuminate\Database\Seeder;

class AutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores = [
            'MIGUEL DE CERVANTES',
            'MARQUÉS DE SADE',
            'VICTOR HUGO',
            'MARY SHELLEY ',
            'HERMAN MELVILLE ',
            'FIÓDOR DOSTOYEVSK',
            'JULIO VERNE ',
            'LEÓN TOLSTÓI ',
            'CHARLES DICKENS'
        ];
        for($i=1;$i<20;$i++){
            DB::table('authors')->insert([
                'author' => $autores[rand(0,8)],
                ]);
        }
    }
}
