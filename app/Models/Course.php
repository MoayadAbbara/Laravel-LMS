<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'thumbnail', 'teacher_id', 'grade_id'];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id')->where('role_id', Role::TEACHER);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
}
