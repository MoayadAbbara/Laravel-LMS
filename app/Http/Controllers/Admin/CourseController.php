<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $Courses = Course::all();
        return view('courses', ['Courses' => $Courses]);
    }
}
