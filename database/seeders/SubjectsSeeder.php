<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('subjects')->count()===0){
            DB::table('subjects')->insert([
                [
                    'name_subjects' => 'Tin hoc van phong',
                    'number_credits' => '3',
                ],
                [
                    'name_subjects' => 'Lap trinh php3',
                    'number_credits' => '3',
                ],
            ]);
        }else{
            echo ' Them du lieu thanh cong' . PHP_EOL;
        }
    }
}
