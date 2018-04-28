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
        $name=[
            'Vida',
            'Matematicas Faciles',
            'Ecosistemas',
            'Cosmos',
            'Via Lactea'
        ];
        for($i=1;$i<=20;$i++){
        DB::table('bookcases')->insert([
        'name' => $name[rand(0,4)],
        'user_id' => $i,
    ]);
        }
    }
}
