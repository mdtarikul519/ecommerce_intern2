<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserUserRole;
use Illuminate\Http\Request;

class UserUserController extends Controller
{
    /**
     * 1. ekta students array hobe
     * 2. students array te individual ekekekti student er info thakbe
     * 3. information e
     *      . name
     *      . roll
     *      . department
     *            . CSE, ECE, EEE
     *      . subjects name e r ekti array thakbe
     *
     *  . ei array te C, C++, JAVA, PHP
     * 4. same data niye 10 jon student er data array hobe
     * 5. actions
     *      . roll diye find kora jhabe
     *      . name wise sort
     *      . roll wise
     *      . department
     * 5. je kono student er name, roll, department, subject add edit or update korte parbo
     * 6. je kono user delete korte parbo.
     */
    public function assain_role($id)
    {
        $data      = User::find($id);
        $userRoles = UserRole::all();
        return view('admin.useruser_role.index', compact('data', 'userRoles'));
    }

    public function user_store()
    {
        UserUserRole::insert([
            'user_id' => request()->user_id,
            'role_id' => request()->role_id,

        ]);
        return redirect()->back()->with('success', 'contact send successfully.');
    }

    public function view($id)
    {
        $data = UserUserRole::find($id);
        return view('admin.useruser_role.view', compact('data'));
    }
}
