<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'courseName',
        'courseYearNumeric',
        'section',
    ];

    public function combinedSubjects()
    {
      return $this->hasMany(SubjectCombination::class);
    }
    public function students()
    {
      return $this->hasMany(Student::class);
    }
    public function result()
    {
      return $this->hasMany(Result::class);
    }
}
