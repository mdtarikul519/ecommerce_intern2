<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\Studented;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public  function create(){
        $all_data  = Studented::get();
        $data  = Exam::get();
          return view('admin.examresult.create',compact('all_data','data'));
    }


    public function index(){
        $data  = ExamResult::get();
        return view('admin.examresult.index',compact('data'));
    }

    public function store(){
        $data = new ExamResult();

        $data->student_id = request()->student_id;
        $data->exam_id = request()->exam_id;
        $data->mark = request()->mark;
        $data->save();

        return redirect()->route('dashboard.exam_result.index');
    }
}
