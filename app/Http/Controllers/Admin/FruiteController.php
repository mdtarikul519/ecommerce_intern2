<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fruites;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FruiteController extends Controller
{

  
  public function details($id)
  {
      $data = Fruites::where('id', $id)->with('shopes')->first();
      return view('admin.fruite.view', compact('data'));
  }

    public function create(){
             return view('admin.fruite.create');    
    }

    public function index(){
         $all_data = Fruites::get();
        return view('admin.fruite.index',compact('all_data'));
    }
      public function store(Request $request){
        // dd(request()->all());
        $data = new Fruites();
       
        $data->fruites_name = request()->fruites_name;
        $data->price = request()->price;
        $data->description = request()->description;
       
        $data->image = Storage::put('/crudFruites_upload', request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.fruite.index');

   }

   public function edit($id){
      $editdata = Fruites::find($id);
      return view('admin.fruite.edit',compact('editdata'));
   }

   public function update(){
    
    $data = Fruites::find(request()->id);
    // dd($data);
    $data->fruites_name = request()->fruites_name;
    $data->price = request()->price;
    $data->description = request()->description;
    $data->image = Storage::put('/crudFruites_upload',request()->file('image'));
  //   $data->save();
  //   if (request()->has('shop')) {
  //     $data->shop()->sync(request()->shop);
  //  }
    return redirect()->route('dashboard.fruite.index');

  }
}