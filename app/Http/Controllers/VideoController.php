<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mistake;
use App\Models\Video;
use Session;
class VideoController extends Controller
{
    public function VideoCreate()
    {
    	
    	return view('backend.video_form');
    }

    public function VideoSave(Request $request)
    {
        $video = new Video();
        $video->title = $request->title;
        $video->link  = $request->link;
        $video->save();

       Session::flash('success','Video added Succssfully');
       return back();
    }

    public function VideoList()
    {
    	 $user = Auth::user()->email;
        $mistakes = Mistake::where('email',$user)
       ->get();
        $count = $mistakes->count();
    	$lists = Video::all();
    	return view('frontend.video_list',compact('lists','count'));
    }
}
