<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nlc_quantri_tableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nlcmatkhau=md5("123456");
        DB::table('nlc_quan_tri')->insert([
            'nlctaikhoan'=>"linhchi@gmail.com",
            'nlcmatkhau'=>" $nlcmatkhau",
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_quan_tri')->insert([
            'nlctaikhoan'=>"012345@gmail.com",
            'nlcmatkhau'=>" $nlcmatkhau",
            'nlctrangthai'=>0
        ]);
    }
}
