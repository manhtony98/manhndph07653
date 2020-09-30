<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('students')->count()===0){
            DB::table('students')->insert([
                [
                     'name' => 'Nguyen Duc Manh',
                    'age' => '22',
                    'gender' => 'nam',
                    'address' => 'Hai Duong',
                    'class' => 'pt15111',
                    'is_active' => true,
                ],
                [
                    'name' => 'Nguyen Van An',
                    'age' => '20',
                    'gender' => 'nam',
                    'address' => 'Ha Noi',
                    'class' => 'pt15111',
                    'is_active' => true,
                ],
            ]);
        }else{
            echo ' Them du lieu thanh cong' . PHP_EOL;
        }
    }
}
