<?php

use Illuminate\Database\Seeder;

class BookCaseMatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<20;$i++){
            DB::table('bookcase_materials')->insert([
                'bookcase_id' => $i,
                'material_id' => $i
                ]);
    }
    }
}
