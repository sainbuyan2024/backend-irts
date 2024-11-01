<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->delete();
        $datas = [
            ['id' => 1, 'course_id'=>1,'firstName' => 'Бат', 'lastName' => 'Пүрэв','gender'=>'эрэгтэй','phoneNumber'=>'99396060','RD'=>'dldl','isActive'=>1],
            ['id' => 2, 'course_id'=>1,'firstName' => 'Дорж', 'lastName' => 'Бороо','gender'=>'эмэгтэй','phoneNumber'=>'99396061','RD'=>'dgsd','isActive'=>1],
            ['id' => 3, 'course_id'=>1,'firstName' => 'Саруул', 'lastName' => 'Гэрэл','gender'=>'Эмэгтэй','phoneNumber'=>'99396062','RD'=>'dfge','isActive'=>1],
        ];
        DB::table('students')->insert($datas);
    }
}
