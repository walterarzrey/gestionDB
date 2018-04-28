<?php

use Illuminate\Database\Seeder;

class BookcaseMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookcase_materials')->insert([
            'bookcase_id' => rand(1,8),
            'material_id' => rand(1,14)
        ]);
    }
}
