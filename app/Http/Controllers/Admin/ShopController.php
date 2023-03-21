<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fruites;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function create(){
        $fruites = Fruites::get();
        return view('admin.shop.create',compact('fruites'));
    }
    public function index(){
        $data = Shop::with([
            'fruites' => function($q){
         return $q->select('fruites.id','fruites.fruites_name');
            }
            ])->get();
        // dd($data->toArray());
        return view('admin.shop.index',compact('data'));
    }

    public function store(Request $request){
        $data = new Shop();
        $data->shop_name = request()->shop_name;
        // $data->fruites_name = request()->fruites_name;
        $data->save();
        $data->fruites()->attach(request()->fruites_name);
        $data->discription= request()->discription;
        $data->image = Storage::put('/crudShop_upload',request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.shop.index');

    }

    public function edit($id){
        $editdata = Shop::find($id);
        return view('admin.shop.edit',compact('editdata'));
    }

    public function update(){
        $data = Shop::find(request()->id);
        $data->shop_name = request()->shop_name;
        $data->discription= request()->discription;
        $data->image = Storage::put('/crudShop_upload',request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.shop.index');

    }

    public function destroy($id)
    {
        Shop::where('id', $id)->delete();
        return redirect()->back()->with('success' ,'Data deleted successfully');
    }
}
