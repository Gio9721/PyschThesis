<?php

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Councilor'
        ]);

        DB::table('roles')->insert([
            'role_name' => 'Student'
        ]);
    }
}
