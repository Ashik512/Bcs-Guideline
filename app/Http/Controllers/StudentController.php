<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Mistake;
use App\Models\Subject;
use App\Models\ModelTest;
use App\Models\Bcs;
use Session;

class StudentController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Dashboard()
    {
    	$count   = $this->count();
      $subjects = Subject::all();
      $models = ModelTest::all();
      $bcs = Bcs::all();
    	return view('frontend.student_home_cards',compact('count','subjects','models','bcs'));
    }

    public function count()
    {
       $user = Auth::user()->email;
        $mistakes = Mistake::where('email',$user)
       ->get();
       $count = $mistakes->count();
       return $count;
    }

    
}
