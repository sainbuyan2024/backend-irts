<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->delete();
        $datas = [
            ['id' => 1,
            'teacher_id' =>1, 
            'grade' => 11, 
            'group' => 'A', 
            'YearLesson' => 
            '2024-2025', 
            'isActive' => true],
            ['id' => 2,
            'teacher_id' =>1, 
            'grade' => 12, 
            'group' => 'A', 
            'YearLesson' => 
            '2024-2025', 
            'isActive' => true],

        ];
        DB::table('courses')->insert($datas);
    }
}
