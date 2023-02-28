<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserdController extends Controller
{

    public function index()
    {
        $data = User::orderBy('id', 'DESC')->paginate(10);
        return view('admin.users.index', compact('data'));
    }

    public function create()
    {
        $roles = UserRole::get();
        return view('admin.users.create', compact('roles'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => ['required', 'min:5', 'string', 'alpha'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required'],
            'role_id' => ['required'],
            'photo' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],

        ]);

        $user = User::create($request->except('photo', 'password_confirmation'));
        if ($request->hasfile('photo')) {
            $user->photo = Storage::put('uploads/users', $request->file('photo'));
        }
        $user->save();

        return redirect()->back()->with('success', 'user cerate successfuly');
    }
    public function view($id)
    {
        $data = User::find($id);
        return view('admin.users.view', compact('data'));
    }
}
