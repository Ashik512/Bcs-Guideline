<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\SubjectQuestion;
use Session;
use DB;

class SubjectQuestionController extends Controller
{
    public function AddSubjectQuestion()
    {
    
    	$subjects = Subject::all();
    	return view('backend.add_subject_question',compact('subjects'));
    }

    public function SaveSubjectQuestion(Request $request)
    {
    	//return $request;
       $request->validate([
          'subject_id' => 'required',
          'question' => 'required',
          'opt1'     => 'required',
          'opt2'     => 'required',
          'opt3'     => 'required',
          'opt4'     => 'required',
          'ans'     => 'required',
      ]);

       $subject_question = new SubjectQuestion();
       $subject_question->subject_id = $request->subject_id;
       $subject_question->question = $request->question;
       $subject_question->opt1 = $request->opt1;
       $subject_question->opt2 = $request->opt2;
       $subject_question->opt3 = $request->opt3;
       $subject_question->opt4 = $request->opt4;
       $subject_question->ans = $request->ans;
       $subject_question->save();

       Session::flash('success','Subject Question added Successfully');
       return back();
    }

    /*public function ViewModelQuestion()
    {
    	//$questions = DB::table('questions')
    	//->leftjoin('subjects','questions.subject_code','subjects.subject_code')
    	//->select('questions.*','subjects.subject_name')
    	//->get();
    	
      $questions = ModelQuestion::all(); 
    	return view('backend.view_model_question',compact('questions'));
    }*/

   /* public function EditModelQuestion($id)
    {
    	$models = ModelTest::all();
        $question   = ModelQuestion::find($id);
        //return $subject;
        return view('backend.edit_model_question',compact('question','models'));
    }*/


   /* public function UpdateModelQuestion(Request $request,$id)
    {
    	//return $request;

    	$question = ModelQuestion::find($id);

       $request->validate([
          'model_code' => 'required',
          'question' => 'required',
          'opt1'     => 'required',
          'opt2'     => 'required',
          'opt3'     => 'required',
          'opt4'     => 'required',
          'ans'     => 'required',
      ]);

      
       $question->model_code = $request->model_code;
       $question->question = $request->question;
       $question->opt1 = $request->opt1;
       $question->opt2 = $request->opt2;
       $question->opt3 = $request->opt3;
       $question->opt4 = $request->opt4;
       $question->ans = $request->ans;
       $question->save();

       Session::flash('success','Model Question updated Successfully');
       return back();
    }*/

   /* public function DeleteModelQuestion($id)
    {
     
        //$id             =base64_decode($id);
        $question = ModelQuestion::find($id);
        $question->delete();    
        Session::flash('success','Model Question delete Success');
        return back();
    }*/

}
