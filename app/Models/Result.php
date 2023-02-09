<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';

    protected $fillable = [
      'course_id',
      'student_id',
      'subject_id',
    ];

    public function course()
    {
      return $this->belongsTo(Course::class);
    }
    public function student()
    {
      return $this->belongsTo(Student::class);
    }
    public function subject()
    {
      return $this->belongsTo(Subject::class);
    }

}
