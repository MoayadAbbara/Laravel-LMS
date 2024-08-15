<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'program'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function student()
    {
        return $this->hasMany(User::class)->where('role_id', Role::STUDENT);
    }
}
