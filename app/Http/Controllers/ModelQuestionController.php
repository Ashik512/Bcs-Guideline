<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTest;
use App\Models\ModelQuestion;
use Session;
use DB;

class ModelQuestionController extends Controller
{
    public function AddModelQuestion()
    {
    
    	$models = ModelTest::all();
    	return view('backend.add_model_question',compact('models'));
    }

    public function SaveModelQuestion(Request $request)
    {
    	//return $request;
       $request->validate([
          'model_code' => 'required',
          'question' => 'required',
          'opt1'     => 'required',
          'opt2'     => 'required',
          'opt3'     => 'required',
          'opt4'     => 'required',
          'ans'     => 'required',
      ]);

       $model_question = new ModelQuestion();
       $model_question->model_code = $request->model_code;
       $model_question->question = $request->question;
       $model_question->opt1 = $request->opt1;
       $model_question->opt2 = $request->opt2;
       $model_question->opt3 = $request->opt3;
       $model_question->opt4 = $request->opt4;
       $model_question->ans = $request->ans;
       $model_question->save();

       Session::flash('success','Model Question added Successfully');
       return back();
    }

    public function ViewModelQuestion()
    {
    	/*$questions = DB::table('questions')
    	->leftjoin('subjects','questions.subject_code','subjects.subject_code')
    	->select('questions.*','subjects.subject_name')
    	->get();*/
    	
      $questions = ModelQuestion::all(); 
    	return view('backend.view_model_question',compact('questions'));
    }

    public function EditModelQuestion($id)
    {
    	$models = ModelTest::all();
        $question   = ModelQuestion::find($id);
        //return $subject;
        return view('backend.edit_model_question',compact('question','models'));
    }


    public function UpdateModelQuestion(Request $request,$id)
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
    }

    public function DeleteModelQuestion($id)
    {
     
        //$id             =base64_decode($id);
        $question = ModelQuestion::find($id);
        $question->delete();    
        Session::flash('success','Model Question delete Success');
        return back();
    }
}
