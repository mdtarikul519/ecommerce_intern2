<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function contact(){
        return view('website.contact');
    }

    public function contact_submit(Request $request){


        $this->validate($request,[
              'contact_name'=>['required','min:5','string','alpha'],
              'email'=>['required','min:9','email'],
              'subject'=>['required','min:4'],
              'message'=>['required','min:30']

        ]);

             Contact::insert([
                   'name'=> request()->contact_name,
                   'email'=> request()->email,
                   'subject'=> request()->subject,
                   'message'=> request()->message,
          ]);
          return redirect()->back()->with('success', 'contact send successfully.');
    }
}
