<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserPermission;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserPermissionController extends Controller
{

// public function assain_role($id){
//      $data = User::find($id);
//      $userRoles = UserRole::all();
//      return view('admin.user_permission.user_id', compact('data','userRoles') );
//  }

//    public function user_store(){

//     UserPermission::insert([
//         'user_id'=> request()->user_id,
//         'role_id'=> request()->role_id,

// ]);
// return redirect()->back()->with('success', 'contact send successfully.');

//    }
}
