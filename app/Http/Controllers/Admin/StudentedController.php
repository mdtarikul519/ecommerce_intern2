<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Studented;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentedController extends Controller
{

    public function index()
    {
        $data = Studented::get();
        return view('admin.studented.index', compact('data'));
    }

    public function create()
    {
        $all_data = Student::get();
        return view('admin.studented.create', compact('all_data'));
    }

    public function store()
    {

        $data = new Studented();

        $data->name = request()->name;
        $data->email = request()->email;
        $data->department = request()->department;
        $data->registation = request()->registation;
        $data->image = Storage::put('/studented_image', request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.studented.index');
    }


    public function edit($id)
    {
        $all_data = Student::get();
        $editdata = Studented::find($id);
        return view('admin.studented.edit', compact('editdata', 'all_data'));
    }

    public function update(Request $request, $id)
    {

        $data = Studented::find($id);

        $data->name = request()->name;
        $data->email = request()->email;
        $data->department = request()->department;
        $data->registation = request()->registation;
        if (request()->hasFile('image')) {

            $data->image = Storage::put('studented_image', request()->file('image'));
        }
        $data->save();
        return redirect()->back();
    }

    public function destory($id){
        Studented::where('id',$id)->delete();
        return redirect()->back();
    }
}
