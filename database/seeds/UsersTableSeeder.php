<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'idnum' => '11111111',
            'fname' => 'admin',
            'mname' => '',
            'lname' => 'admin',
            'email' => 'admin@admin.com',
            'password'=> 'admin',
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'idnum' => '22222222',
            'fname' => 'councilor',
            'mname' => '',
            'lname' => 'councilor',
            'email' => 'councilor@councilor.com',
            'password'=> 'councilor',
        ]);
        DB::table('users')->insert([
            'course_id' => '1',
            'role_id' => '3',
            'idnum' => '33333333',
            'fname' => 'student',
            'mname' => '',
            'lname' => 'student',
            'email' => 'student@student.com',
            'password'=> 'student',
        ]);
    }


}
