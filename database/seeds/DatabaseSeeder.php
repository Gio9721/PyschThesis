<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(UsersTableSeeder::class);


    }
}

