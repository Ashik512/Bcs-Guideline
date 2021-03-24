<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\Question;


class AdminController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
    	$subject    = Subject::all()->count();
    	$student    =  User::all()->count();
    	$question   =  Question::all()->count();
        $students   = User::all();
        return view('backend.admin_home_cards',compact('subject','student','question','students'));
    }

}
