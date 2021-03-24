<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\ModelQuestion;
use Session;

class ReviewController extends Controller
{
    public function Reviews($ques_id)
    {
    	//return $ques_id;
    	$user = Auth::user()->email;
         $question = ModelQuestion::where('id',$ques_id)->first();
        //return $question;

        $exists   = Review::where('question_id',$ques_id)->first();

        //return $exists;
           if($exists){
           	return back();
          
    }
    else
    {
    	 $review = new Review();

           $review->question_id = $ques_id;
           $review->email    = $user;
           $review->question = $question->question;
           $review->opt1     = $question->opt1;
           $review->opt2     = $question->opt2;
           $review->opt3     = $question->opt3;
           $review->opt4     = $question->opt4;
           $review->ans      = $question->ans;

           $review->save();
           return ['success'=>true, 'message'=>'success'];
           
    	
    }
}
}
