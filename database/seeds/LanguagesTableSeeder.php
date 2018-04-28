<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idiomas = [
            'alemán',
            'catalán',
            'francés',
            'español ',
            'eslovaco'
        ];
        for($i=1;$i<20;$i++){
            DB::table('languages')->insert([
                'language' => $idiomas[rand(0,4)],
                ]);
        }
    }
}
