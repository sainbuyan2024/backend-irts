<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Teachers')->delete();
        $datas = [
            ['id' => 1, 'firstName' => 'Сайнбуян', 'lastName' => 'Батцэнд','gender'=>'эрэгтэй','phoneNumber'=>'99396060','lesson'=>'dldl'],
            ['id' => 2, 'firstName' => 'Сайнбуян', 'lastName' => 'Батцэнд','gender'=>'эрэгтэй','phoneNumber'=>'99396061','lesson'=>'dgsdfsg'],
            ['id' => 3, 'firstName' => 'Сайнбуян', 'lastName' => 'Батцэнд','gender'=>'эрэгтэй','phoneNumber'=>'99396062','lesson'=>'dfgesrg'],
        ];
        DB::table('Teachers')->insert($datas);
    }
}
