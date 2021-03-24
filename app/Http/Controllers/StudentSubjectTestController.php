<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mistake;
use Illuminate\Support\Facades\Auth;
use App\models\Subject;
use App\models\SubjectQuestion;

class StudentSubjectTestController extends Controller
{
    public function SubjectTestForm()
    {
       $count   = $this->count();
    	$subjects = Subject::all();
        return view('frontend.subject_test_form',compact('subjects','count'));
    }

    public function GiveSubjectTest($id = null)
    {
    	/*Session::put('nextq','1');
    	Session::put('currectans','0');*/
       
      //return $subject_code;
      $count   = $this->count();
      if($id!=null){
        $id = $id;
        $questions = SubjectQuestion::where('subject_id',$id)
        ->get();
         $total_ques = $questions->count();
        $name = Subject::where('id',$id)
        ->select('subjects.subject_name')
        ->first();
        //return $name->subject_name;
       // return $questions;
        if($total_ques == 0)
        {
           return view('frontend.blank_page',compact('count'));
        }
        return view('frontend.give_subject_test',compact('questions','id','count','total_ques','name'));
    }
    else
    {
        return view('frontend.studentmaster',compact('count'));
    }
    }
   
   public function SubmitAns(Request $request,$code)
   {
   	
        $count = $this->count();
        $user = Auth::user()->email;
       
       $questions = SubjectQuestion::where('subject_id',$code)
        ->get();
       $total = $questions->count();

        //return $questions;
       
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

      return view('frontend.view_subject_score',compact('marks','count','user_name','total','wrong','code'));
   }

   
     public function ViewAns($code)
    {

        $count = $this->count();
        $questions = SubjectQuestion::where('subject_id',$code)
        ->get();
        $name = Subject::where('id',$code)
        ->select('subjects.subject_name')
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
