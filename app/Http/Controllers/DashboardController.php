<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\view;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index(): view
    {   
        $students = Student::all();
        $teachers = Teacher::all();
        $courses = Course::all();
        $batches = Batch::all();
        $enrollments = Enrollment::all();
        $payments = Payment::all();
        return view('index')->with('students', $students)
                            ->with('teachers', $teachers)
                            ->with('courses', $courses)
                            ->with('batches', $batches)
                            ->with('enrollments', $enrollments)
                            ->with('payments', $payments);
    }
}
