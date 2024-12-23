<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nlc_loaisanpham_tableseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'L001',
            'nlctenloai'=>'cay canh van phong',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'L002',
            'nlctenloai'=>'cay de ban',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'L003',
            'nlctenloai'=>'cay canh phong thuy',
            'nlctrangthai'=>0
        ]);
        DB::table('nlc_loaisanpham')->insert([
            'nlcmaloai'=>'L004',
            'nlctenloai'=>'cay thuy',
            'nlctrangthai'=>0
        ]);
    }
}
