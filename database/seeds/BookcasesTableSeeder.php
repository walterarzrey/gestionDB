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
        $namebook=[
            'LAB Science',
            'Elemental Calculus',
            'Life Bases',
            'Networks and Servers',
        ];
        for($i=1;$i<=20;$i++){
        DB::table('bookcases')->insert([
        'name' => $namebook[rand(0,3)],
        'user_id' => $i,
    ]);
        }
    }
}
