<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index(){
    return view('admin.dashboard');
   }

   public function demo_index(){
    return view('admin.common.index');
   }

   public function demo_create(){
    return view('admin.common.create');
   }
   public function demo_view(){
    return view('admin.common.view');
   }

// //    public function logout(){
// //     // dd('ff');
// //      Auth::logout();
// //      return redirect('/');

//    }
}
