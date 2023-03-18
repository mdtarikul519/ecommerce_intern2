<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrudAuthor;
use App\Models\CrudBook;
use App\Models\CrudPublication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudBookController extends Controller
{
    public function index()
    {
        $all_data = CrudBook::get();
        return view('admin.book.index', compact('all_data'));
    }
    public function create()
    {

        $data = CrudAuthor::get();
        $publis = CrudPublication::get();
        return view('admin.book.create', compact('data', 'publis'));
    }



    public function store(Request $request)
    {

        // dd(request()->all());
        $crud = new CrudBook();
        $crud->title = request()->title;
        // $crud->publiser = request()->publiser;

        $crud->save();

        $crud->crud_author()->attach(request()->author);
        $crud->crud_publiser()->attach(request()->publiser);
        $crud->image = Storage::put('/crudbook_upload', request()->file('image'));
        $crud->save();

        // $all_data = CrudBook::get();
        //    return view('admin.book.index',compact('all_data'));

        return redirect()->route('dashboard.crudbook.index');

        //  dd(request()->all());
        //     }
    }

    public function edit($id)
    {
        $editdata = CrudBook::where('id',$id)->with('crud_author')->first();
        $CrudAuthors = CrudAuthor::get();
        $publis = CrudPublication::get();

        // dd(
        //     $editdata->toArray(),
        //     $CrudAuthors->toArray(),
        //     $publis->toArray()
        // );
        return view('admin.book.edit', compact('editdata', 'CrudAuthors', 'publis'));
    }
}
