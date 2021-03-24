<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTest;
use App\Models\ModelQuestion;
use App\Models\Mistake;
use Illuminate\Support\Facades\Auth;
use Session;


class StudentModelTestController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }

    public function ModelTestForm()
    {
      $count   = $this->count();
    	$models = ModelTest::all();
        return view('frontend.model_test_form',compact('models','count'));
    }

    public function GiveModelTest($model_code = null)
    {
    	/*Session::put('nextq','1');
    	Session::put('currectans','0');*/
       
      //return $subject_code;
      $count   = $this->count();
      if($model_code!=null){
        $code = $model_code;
        $questions = ModelQuestion::where('model_code',$code)
        ->get();
         $total_ques = $questions->count();
        $name = ModelTest::where('model_code',$code)
        ->select('model_tests.model_name')
        ->first();
        //return $name->subject_name;
       // return $questions;
        if($total_ques == 0)
        {
           return view('frontend.blank_page',compact('count'));
        }
        return view('frontend.give_model_test',compact('questions','code','count','total_ques','name'));
    }
    else
    {
        return view('frontend.studentmaster');
    }
    }
   
   public function SubmitAns(Request $request,$code)
   {
   	
        $count = $this->count();
        $user = Auth::user()->email;
       
       $questions = ModelQuestion::where('model_code',$code)
        ->get();
      $total = $questions->count();
       
        $marks = 0;
       foreach ($questions as $question) {
        //return $request->$question->id;
           if($question->ans == $request[$question->id]){
            $marks++;
        }
        else{
            
           $exists   = Mistake::where('question_id',$question->id)->first();
           if(!$exists){
           $mistake = new Mistake();

           //return $mistake;
           $mistake->question_id = $question->id;
           $mistake->email    = $user;
           $mistake->question = $question->question;
           $mistake->opt1     = $question->opt1;
           $mistake->opt2     = $question->opt2;
           $mistake->opt3     = $question->opt3;
           $mistake->opt4     = $question->opt4;
           $mistake->ans      = $question->ans;

           $mistake->save();
       }

        }
               
       }
     
       /* $subjects = Subject::where('subject_code',$code)
        ->first();
        $scores = new Mark();
        $scores->email = $user;
        $scores->subject_code = $subjects->subject_code;
        $scores->subject_name = $subjects->subject_name;
        $scores->marks = $marks;
        $scores->save();*/
        $wrong = $total - $marks;
        $user_name = Auth::user()->name;

        return view('frontend.view_score',compact('marks','count','user_name','total','wrong','code'));
   }

    public function Mistakes()
    {
       $count = $this->count();
       $user = Auth::user()->email;
        $mistakes = Mistake::where('email',$user)
       ->get();
       return view('frontend.mistakes',compact('mistakes','count'));
    }

    public function DeleteMistake($id)
    {
       $count   = $this->count();
       $mistake = Mistake::find($id);
       $mistake->delete();    
       Session::flash('success','Mistake deleted Successfully');
       return back()->with('count','count');
    }


    public function ViewAns($code)
    {

        $count = $this->count();
        $questions = ModelQuestion::where('model_code',$code)
        ->get();
        $name = ModelTest::where('model_code',$code)
        ->select('model_tests.model_name')
        ->first();
        //return $name->subject_name;
       // return $questions;
        return view('frontend.view_ans',compact('questions','name','code','count'));
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
