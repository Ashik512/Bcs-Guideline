<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreviousQuestion;
use App\Models\Bcs;
use Session;

class PreviousQuestionController extends Controller
{
    public function PreviousQuestion()
    {
    	$models = Bcs::all();
    	return view('backend.previous-question-form',compact('models'));
    }

    public function SavePreviousQuestion(Request $request)
    {

    	//return $request;
       $request->validate([
          'bcsno' => 'required',
          'question' => 'required',
          'opt1'     => 'required',
          'opt2'     => 'required',
          'opt3'     => 'required',
          'opt4'     => 'required',
          'ans'     => 'required',
      ]);

       $previous_question = new PreviousQuestion();
       $previous_question->bcsno = $request->bcsno;
       $previous_question->question = $request->question;
       $previous_question->opt1 = $request->opt1;
       $previous_question->opt2 = $request->opt2;
       $previous_question->opt3 = $request->opt3;
       $previous_question->opt4 = $request->opt4;
       $previous_question->ans = $request->ans;
       $previous_question->save();

       Session::flash('success','Previous Question added Successfully');
       return back();
    }

    public function ViewPreviousQuestion()
    {
    	
      $questions = PreviousQuestion::all(); 
    	return view('backend.view_previous_question',compact('questions'));
    }

     public function EditPreviousQuestion($id)
    {
    	//$models = ModelTest::all();
        $question   = PreviousQuestion::find($id);
        //return $subject;
        return view('backend.edit_previous_question',compact('question'));
    }


    public function UpdatePreviousQuestion(Request $request,$id)
    {
    	//return $request;

    	$question = PreviousQuestion::find($id);

       $request->validate([
          'bcsno' => 'required',
          'question' => 'required',
          'opt1'     => 'required',
          'opt2'     => 'required',
          'opt3'     => 'required',
          'opt4'     => 'required',
          'ans'     => 'required',
      ]);

      
       $question->bcsno = $request->bcsno;
       $question->question = $request->question;
       $question->opt1 = $request->opt1;
       $question->opt2 = $request->opt2;
       $question->opt3 = $request->opt3;
       $question->opt4 = $request->opt4;
       $question->ans = $request->ans;
       $question->save();

       Session::flash('success','previous Question updated Successfully');
       return back();
    }

    public function DeletePreviousQuestion($id)
    {
     
        //$id             =base64_decode($id);
        $question = PreviousQuestion::find($id);
        $question->delete();    
        Session::flash('success','Previous Question delete Success');
        return back();
    }
}
