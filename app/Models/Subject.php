<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = "subjects";

    protected $fillable = [
        'subjectName',
        'subjectCode',
    ];

    public function combinedSubjects()
    {
      return $this->hasMany(SubjectCombination::class);
    }
    public function result()
    {
      return $this->hasMany(Result::class);
    }
}
