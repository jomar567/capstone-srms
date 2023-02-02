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
}
