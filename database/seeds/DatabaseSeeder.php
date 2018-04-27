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
        $this->call(UserRolesTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(MaterialAuthorsTableSeeder ::class);
        $this->call(AreasTableSeeder ::class);
        $this->call(MaterialAreasTableSeeder ::class);
        $this->call(BookcasesTableSeeder ::class);
        $this->call(BookcaseMaterialsTableSeeder ::class);
        $this->call(UserViewMaterialsTableSeeder ::class);

    }
}
