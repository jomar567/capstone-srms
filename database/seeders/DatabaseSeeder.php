<?php

namespace Database\Seeders;
use App\Models\Course;
use App\Models\Admin;
use App\Models\Subject;

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
      //Admin
      Admin::create([
        'username' => 'admin',
        'password' => 'admin123'
      ]);

      //Course
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

      //Subjects
      Subject::create([
        'subjectName' => 'Programming 1',
        'subjectCode' => '001'
      ]);
      Subject::create([
        'subjectName' => 'Software Development',
        'subjectCode' => '002'
      ]);
      Subject::create([
        'subjectName' => 'Web Development',
        'subjectCode' => '101'
      ]);

    }
}
