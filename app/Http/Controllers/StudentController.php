<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::get();
        // return $data;
        return view('student-list', compact('data'));
    }
    public function addStudent()
    {
        return view('add-student');
    }
    public function saveStudent(Request $request)
    {
        return view('save-student');
    }
}
