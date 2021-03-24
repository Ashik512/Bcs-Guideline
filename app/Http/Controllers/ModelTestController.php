<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelTest;
use App\Models\ModelQuestion;
use Session;

class ModelTestController extends Controller
{
    public function add_model()
    {
    	return view('backend.model_test');
    }


    public function save_model(Request $request)
	{
		//return $request;

		$request->validate([
          'model_name' => 'required|unique:model_tests|max:20',
          'model_code' => 'required|unique:model_tests|max:20',
      ]);

       $modelTest = new ModelTest();
       $modelTest->model_code = $request->model_code;
       $modelTest->model_name = $request->model_name;
       $modelTest->save();

       Session::flash('success','Model Test added Successfully');
       return redirect()->back();
	}

	public function ModelTestList()
    {
    	$models = ModelTest::all();
    	return view('backend.model_list',compact('models'));
    }

    public function EditModelTest($id)
    {
        $model   = ModelTest::find($id);
        //return $subject;
        return view('backend.edit_model',compact('model'));
    }
    
    public function UpdateModelTest(Request $request,$id)
     {
      
      $model             = ModelTest::find($id);

      if($request->model_name == $model->model_name ){
       $request->validate([
          'subject_name' => 'required|unique:model_tests|max:20',
          'subject_code' => 'required|unique:model_tests|max:20',
      ]);
     }
        

        $model->model_code = $request->model_code;
        $model->model_name = $request->model_name;
        $model->save();

       Session::flash('success','ModelTest updated Successfully');
       return back();
   }

   public function DeleteModelTest($id)
    {
     
        //$id             =base64_decode($id);
        $model          = ModelTest::find($id);
        $number = $model->model_code;
        ModelQuestion::where('model_code',$number)->delete();
        $model->delete();
        ModelQuestion::where('model_code',$number)->delete();
       /* if($model_question!= null)
           $model_question->delete(); */   
        Session::flash('success','Model Test delete Success');
        return back();
    }
}
