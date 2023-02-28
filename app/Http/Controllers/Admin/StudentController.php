<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::all();
        return view('admin.students.index', compact('data'));
    }


    public function create()
    {
        $roles = Student::get();
        return view('admin.students.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required'],
            'role' => ['required'],
            'department' => ['required'],
            'subject' => ['required'],
        ]);

        Student::insert([
            'name' => request()->name,
            'role' => request()->role,
            'department' => request()->department,
            'subject' => request()->subject,
        ]);
        return redirect()->back()->with('success', 'Student send successfully.');
    }

    public function view($id)
    {
        $data = Student::find($id);
        return view('admin.students.view', compact('data'));
    }


    public function edit($id)
    {
        $editdata = Student::find($id);
        return view('admin.students.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $data = Student::find($id);

           $data->name = $request->name;
           $data->role = $request->role;
           $data->department = $request->department;
           $data->subject = $request->subject;
           $data->update();
           return redirect()->route('dashboard.students.index')->with('success','data update successfully');
    }


    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        return redirect()->back()->with('success' ,'Data deleted successfully');
    }

}
