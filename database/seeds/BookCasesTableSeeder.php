<?php

use Illuminate\Database\Seeder;

class BookCasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){

    		DB::table('bookcases')->insert([
            'name' => "Book " . $i,
            'user_id' => rand(1,20)
        ]); 
    		}
    }
}
