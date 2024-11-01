<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Attendances')->delete();
        $datas = [
            ['id' => 1, 'course_id' => 1, 'student_id' => 1,'stat_id'=> 1,'adate'=>now()],
            ['id' => 2, 'course_id' => 1, 'student_id' => 2,'stat_id'=> 2,'adate'=>now()],
            ['id' => 3, 'course_id' => 1, 'student_id' => 3,'stat_id'=> 3,'adate'=>now()],
        ];   
        DB::table('Attendances')->insert($datas);
    }
}
