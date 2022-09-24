<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course_name' => 'Bachelor of Science Information Communication and Technology(BS_ICT)',
            'year' => '1st Year',
            'school' => 'School of Arts and Sciences(SAS)',
        ]);
    }
}
