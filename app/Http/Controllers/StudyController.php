<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Detail;
use App\Models\Mistake;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class StudyController extends Controller
{

	/* public function __construct()
    {
        $count = $this->count();
    }*/

  

    public function add_subject()
    {
    	return view('backend.add_subject_form');
    }

    public function save_subject(Request $request)
	{
		//return $request;

		$request->validate([
          'subject_name' => 'required|unique:subjects',
          
      ]);

       $subject = new Subject();
       $subject->subject_name = $request->subject_name;
       $subject->save();

       Session::flash('success','Subject added Successfully');
       return redirect()->back();
	}

	 public function add_chapter()
    {
    	$subjects = Subject::all();
    	return view('backend.add_chapter_form',compact('subjects'));
    }

    public function save_chapter(Request $request)
	{
		//return $request;

		$request->validate([
          'subject_name' => 'required',
           'chapter_name' => 'required',
          
      ]);

       $chapter = new Chapter();
       $chapter->subject_id = $request->subject_name;
       $chapter->chapter_name = $request->chapter_name;
       $chapter->save();

       Session::flash('success','Chapter added Successfully');
       return redirect()->back();
	}

	 public function add_details()
    {
    	$chapters = Chapter::all();
    	return view('backend.add_details_form',compact('chapters'));
    }

     public function save_details(Request $request)
	{
		//return $request;

		$request->validate([
          'chapter_name' => 'required',
          'chapter_title' => 'required',
           'chapter_details' => 'required',
          
      ]);

       $details = new Detail();

       $details->chapter_id = $request->chapter_name;
       $details->chapter_title = $request->chapter_title;
       $details->chapter_details = $request->chapter_details;

       $details->save();

       Session::flash('success','Chapter Details added Successfully');
       return redirect()->back();
	}

	//frontend

	public function all_subjects()
	{
		$count = $this->count();
		$subjects = Subject::all();
		return view('frontend.subject_list',compact('subjects','count'));
	}

	public function  chapter_list($id)
	{
	   $count = $this->count();
       $lists = Chapter::where('subject_id',$id)
       ->get();
       return view('frontend.chapter_list',compact('lists','count'));

	}

	public function read_details($id,$chapter_name)
	{
		$count = $this->count();
		$details = Detail::where('chapter_id',$id)
		->simplepaginate(3);
		return view('frontend.read_details',compact('details','count','chapter_name'));
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
