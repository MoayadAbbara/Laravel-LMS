<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index()
    {
        $Courses = Course::where('teacher_id', Auth::user()->id)->get();
        return view('courses', ['Courses' => $Courses]);
    }

    public function view(Course $course)
    {
        Gate::authorize('view', $course);
        $lessons = Lesson::where('course_id', $course->id)->get();
        return view('courseDetails', compact("lessons", "course"));
    }
}
