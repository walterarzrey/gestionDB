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
        $this->call(RolesTablesSeeder::class);
        $this->call(UserRolesTablesSeeder::class);
        $this->call(AuthorsTablesSeeder::class);
        $this->call(MaterialsTablesSeeder::class);
        $this->call(MaterialAuthorsTablesSeeder ::class);
        $this->call(AreasTablesSeeder ::class);
        $this->call(MaterialAreasTablesSeeder ::class);
        $this->call(BookcaseTablesSeeder ::class);

    }
}
