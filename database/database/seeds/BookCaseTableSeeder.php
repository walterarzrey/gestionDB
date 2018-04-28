<?php

use Illuminate\Database\Seeder;

class BookCaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namess = [
            'CIENCIA',
            'MATEMATICAS',
            'LENGUAS',
            'FILOSOFIA'
        ];
        for($i=1;$i<20;$i++){
            DB::table('bookcases')->insert([
                'name' => $namess[rand(0,3)],
                'user_id'   =>  $i
                ]);
        }
    }
}
