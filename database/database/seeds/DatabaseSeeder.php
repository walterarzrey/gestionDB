<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(MaterialTypesTableSeeder::class);
        $this->call(AutorsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(BookCaseTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(BookCaseMatTableSeeder::class);
        $this->call(UserMatTableSeeder::class);
        $this->call(MATareaableSeeder::class);
        $this->call(MatAutorTableSeeder::class);
    }
}
