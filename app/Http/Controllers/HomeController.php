<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function WeeklyProgram()
    {
        $imagePath = Auth::user()->grade->program;
        return view('weeklyProgram', compact('imagePath'));
    }

    public function CourseRedirect()
    {
        $role = Auth::user()->role_id;
        if ($role == Role::STUDENT) {
            return redirect()->route('student.courses');
        } elseif ($role == Role::TEACHER) {
            return redirect()->route('teacher.courses');
        }
    }

    public function CourseLessonRedirect(Course $course)
    {
        $role = Auth::user()->role_id;
        if ($role == Role::STUDENT) {
            return redirect()->route('student.courses.view', ['course' => $course->id]);
        } elseif ($role == Role::TEACHER) {
            return redirect()->route('teacher.courses.view', ['course' => $course->id]);
        }
    }
}
