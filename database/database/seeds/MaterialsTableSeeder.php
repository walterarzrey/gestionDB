<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = [
            'CIENTIFICO',
            'PERIODISTICO',
            'ARTE',
            'CULTURA ',
            'TECNOLOGIA'
        ];
        $op = [
            'no',
            'yes'
        ];
        for($i=1;$i<20;$i++){
            DB::table('materials')->insert([
                'title' => $title[rand(0,4)],
                'language_id' => $i,
                'edition' => rand(1,5),
                'year' => rand(1998,2002),
                'material_type_id' => $i,
                'file' => "00".$i,
                'abstract' => $title[rand(0,4)]."resumen 00".$i,
                'isbn' => "00546456".$i,
                'is_digital' =>  $op[rand(0,1)],
                'user_id' => $i

                ]);
    }
}}
