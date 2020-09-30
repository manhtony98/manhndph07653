<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Students;
use App\Models\Subjects;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Students::factory(10)->create();
        Subjects::factory(20)->create();
        // $this->call([
        //     StudentsSeeder::class,
        //     SubjectsSeeder::class,
        // ]);
    }
}
