<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {
        $all_data = Student::get();
        return view('admin.exam.create', compact('all_data'));
    }

    public function index()
    {
        $data = Exam::get();
        return view('admin.exam.index', compact('data'));
    }

    public function store()
    {
        $data = new Exam();

        $data->exam_name = request()->exam_name;
        $data->exam_name = request()->exam_name;


    }
}
