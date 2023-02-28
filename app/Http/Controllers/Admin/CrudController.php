<?php

namespace App\Http\Controllers\Admin;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CrudModel;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
   public function index(){
      $data = UserRole::all();
      $all_data = CrudModel::all();
       return view('admin.crud.index',compact( 'data','all_data' ));
   }

   public function store(){

   $crud = new CrudModel();
    
   $crud->title = request()->title;
   $crud->Description = request()->Description;
   $crud->gender = request()->gender;
   $crud->slug = request()->slug;
   $crud->save();
   $crud->hobby = json_encode(request()->hobby);
   $crud->image = Storage::put('/crud_upload',request()->file('image'));
   $crud->slug = rand(100000,999999).$crud->id;
   $crud->save();

   return redirect()->back();

   //  dd(request()->all());
   }
}
