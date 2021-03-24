<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTest;
use App\Models\User;
use App\Models\ModelQuestion;
use App\Models\SubjectQuestion;
use App\Models\PreviousQuestion;


class AdminController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
    	$models    = ModelTest::all()->count();
    	$student    =  User::all()->count();
    	$question   =  ModelQuestion::all()->count() + SubjectQuestion::all()->count() + PreviousQuestion::all()->count();
        $students   =  User::all();
    	
        return view('backend.admin_home_cards',compact('models','student','question','students'));
    }

}
