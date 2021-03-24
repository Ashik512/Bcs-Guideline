<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bcs;
use App\Models\Mistake;
use App\Models\PreviousQuestion;
use Illuminate\Support\Facades\Auth;
use Session;

class BcsController extends Controller
{
    public function add_bcs()
    {
    	return view('backend.add_bcs');
    }


    public function save_bcs(Request $request)
	{
		//return $request;

		$request->validate([
          'bcs_name' => 'required|unique:bcs|max:20',
          'bcs_no' => 'required|unique:bcs|max:20',
      ]);

       $bcs = new Bcs();
       $bcs->bcs_no = $request->bcs_no;
       $bcs->bcs_name = $request->bcs_name;
       $bcs->save();

       Session::flash('success','Bcs added Successfully');
       return redirect()->back();
	}

	public function BcsList()
    {
    	$models = Bcs::all();
    	return view('backend.bcs_list',compact('models'));
    }

    public function EditBcs($id)
    {
        $model   = Bcs::find($id);
        //return $subject;
        return view('backend.edit_bcs',compact('model'));
    }
    
    public function UpdateBcs(Request $request,$id)
     {
     	//return $request;
     	//return $id;
      
      $model             = Bcs::find($id);
      
       $request->validate([
          'bcs_name' => 'required|unique:bcs|max:20',
          'bcs_no' => 'required|unique:bcs|max:20',
      ]);
       

        $model->bcs_no = $request->bcs_no;
        $model->bcs_name = $request->bcs_name;
        $model->save();

       Session::flash('success','Bcs updated Successfully');
       return back();
   }

   public function DeleteBcs($id)
    {
     
        //$id             =base64_decode($id);
        $model          = Bcs::find($id);
        //$number = $model->bcs_no;
        //PreviousQuestion::where('bcs_no',$number)->delete();
        $model->delete();
        //PreviousQuestion::where('bcs_no',$number)->delete();
       /* if($model_question!= null)
           $model_question->delete(); */   
        Session::flash('success','Bcs delete Success');
        return back();
    }

    public function PreviousQuestion()
    {
       $count = $this->count();
    	$bcs = Bcs::all();
    	return view('frontend.bcs_form',compact('bcs','count'));
    }

    public function ViewQuestion($id)
    {
    	//return $id;
      $count = $this->count();
       $questions = PreviousQuestion::where('bcsno',$id)->get();
       //return $questions;
       return view('frontend.view_question',compact('questions','count','id'));
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
