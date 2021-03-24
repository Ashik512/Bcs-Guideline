<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mistake;
use Session;

class StudentProfileController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ShowProfile()
    {
      
       $user = Auth::user()->email;
       $mistakes = Mistake::where('email',$user)
       ->get();
       $count = $mistakes->count();

      $email     = Auth::user()->email;
      $profile  = User::where('email',$email)
      ->first();
      return view('frontend.profile',compact('profile','count'));
    }


    public function UpdatePofile(Request $request,$email)
    {
      
      $profile  = User::where('email',$email)
      ->first();

       $profile->name = $request->name;
        $profile->save();

      Session::flash('success','Pofile updated Successfully');
      return redirect()->back(); 

    }
}
