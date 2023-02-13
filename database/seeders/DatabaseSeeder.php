<?php

namespace Database\Seeders;
use App\Models\Course;
use App\Models\Admin;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Course::create([
        'courseName' => 'BSIT',
        'courseYearNumeric' => '1',
        'section' => 'C',
      ]);
      Course::create([
        'courseName' => 'BSCS',
        'courseYearNumeric' => '2',
        'section' => 'C',
      ]);
      Course::create([
        'courseName' => 'BSED',
        'courseYearNumeric' => '3',
        'section' => 'A',
      ]);
      Admin::create([
        'username' => 'admin',
        'password' => 'admin123'
      ]);
    }
}
