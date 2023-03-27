<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Student;
use App\Models\Studented;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {
        $all_data = Student::get();
        $data = Studented::get();
        return view('admin.exam.create', compact('all_data', 'data'));
    }

    public function index()
    {
        $data = Exam::with('examstudentd')->get();

        // ([
        //     'examstudentd' => function($q){
        //         return $q->select('examstudentd.id','examstudentd.name');
        //     }
        //     ])->get();
        //     dd($data->toArray());
        return view('admin.exam.index', compact('data'));
    }

    public function store()
    {
        $data = new Exam();

        $data->exam_name = request()->exam_name;
        $data->department = request()->department;
        $data->save();
        $data->examstudentd()->attach(request()->student_name);
        $data->save();

        return redirect()->route('dashboard.exam.index');
    }

    public function edit($id)
    {
        $all_data = Student::get();
        $editdata = Exam::find($id);
        $data = Studented::get();
        return view('admin.exam.edit', compact('editdata', 'all_data','data'));
    }


    public function update()
    {
        $data = Exam::find(request()->id);;

        $data->exam_name = request()->exam_name;
        $data->department = request()->department;
        $data->save();
        if (request()->student_name) {

            $data->examstudentd()->sync(request()->student_name);
        }
        $data->save();

        return redirect()->route('dashboard.exam.index');
    }


    public function destory($id){
        Exam::where('id', $id)->delete();
        return redirect()->back();
    }
}
