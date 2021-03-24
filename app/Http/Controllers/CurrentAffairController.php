<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrentAffair;
use App\Models\Mistake;
use Illuminate\Support\Facades\Auth;
use Session;

class CurrentAffairController extends Controller
{
    public function currentAffair()
    {
        return view('backend.current-affair-form');
    }

    public function SaveCurrentAffair(Request $request)
    {
        $request->validate([
          'title' => 'required',
          'ans' => 'required',
          'hints' => 'required',
          
      ]);

      $current_affair = new CurrentAffair();

      $current_affair->title = $request->title;
      $current_affair->ans = $request->ans;
      $current_affair->hints = $request->hints;

      $current_affair->save();
       Session::flash('success','Current Affair added Successfully');
       return back();

    }

    public function currentAffairList()
    {
    	$affairs = CurrentAffair::all();
    	return view('backend.current-affair-list',compact('affairs'));
    }

    public function EditCurrentAffair($id)
    {
       $affairs = CurrentAffair::find($id);
       return view('backend.edit-current-affair-form',compact('affairs'));
    }

    public function UpdateCurrentAffair(Request $request,$id)
    {
       $affairs = CurrentAffair::find($id);

       $affairs->title = $request->title;
       $affairs->ans   =  $request->ans;
       $affairs->hints   =  $request->hints;

       $affairs->save();

       Session::flash('success','Current Affair Updated Successfully');
       return back();
    }

    public function DeleteCurrentAffair($id)
    {
    	$affairs = CurrentAffair::find($id);
    	$affairs->delete();
        
       Session::flash('success','Current Affair Deleted Successfully');
       return back();

    }

    public function ShowCurrentAffair()
    {
      $count   = $this->count();
      $user = Auth::user()->email;
       $mistakes = Mistake::where('email',$user)
       ->get();
       $count = $mistakes->count();

       $affair_list = CurrentAffair::simplepaginate(4);
      // $affair_count = CurrentAffair::all()->count();
       //return $affair_list;
       return view('frontend.current-affair-show',compact('affair_list','count'));
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
