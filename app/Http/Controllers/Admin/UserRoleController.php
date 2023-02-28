<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserRole::get();
          return view('admin.user_role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $roles = UserRole::get();
      return view('admin.user_role.create', compact('roles'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'=>['required'],
            'serial'=>['required'],

        ]);

        UserRole::insert([
            'title'=> request()->title,
            'serial'=> request()->serial,

           ]);
         return redirect()->back()->with('success', 'User_Role send successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $editdata = UserRole::find($id);
         return view('admin.user_role.edit', compact('editdata'));
    } //

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data = UserRole::find($id);
           $data->title = $request->title;
           $data->serial = $request->serial;
           $data->save();
           return redirect()->route('dashboard.user_role.index')->with('success','data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserRole::where('id', $id)->delete();
        return redirect()->back()->with('success' ,'Data deleted successfully');
    }


    public function view($id){
        $data = UserRole::find($id);
        return view('admin.user_role.view', compact('data'));
    }
}
