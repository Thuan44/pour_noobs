<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function getCourses()
    {
        $courses = Course::with('category')->get();

        return response($courses, 200);
    }

    public function getCourseByID($id)
    {
        $course = Course::findOrFail($id);

        return response($course, 200);
    }
}
