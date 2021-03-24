<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\Mistake;
use Illuminate\Support\Facades\Auth;
use Session;
use Response;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function Create()
    {
    	return view('backend.add-book-form');
    }

    public function Store(Request $request)
    {
       $data = new Documents();
      /* if($request->file('file'))
       {
       	$file = $request->file('file');
       	$filename = time().'.'.$file->getClientOriginalExtension();
       	//return $file->getClientOriginalExtension();
       	$request->file->move('assets/file/'.$filename);

       	$data->file = $filename;
       }*/

      if($request->hasFile('file')){
       //get image file.
      $file = $request->file;
      //get just extension.
      $ext = $file->getClientOriginalExtension();
      //make a unique name
      $filename = 'assets/file/'.uniqid().'.'.$ext;
      $file->move('assets/file/', $filename);
      $data->file=$filename;
      }

       $data->book_name = $request->book_name;
       $data->save();
       
       Session::flash('success','File added Succssfully');
       return back();

    }

    public function BookList()
    {

        $user = Auth::user()->email;
        $mistakes = Mistake::where('email',$user)
       ->get();
        $count = $mistakes->count();

    	$books = Documents::all();
    	return view('frontend.book_list',compact('books','count'));
    }

    public function BookDownload($file)
    {

    	// $file_path = public_path('assets/file/'.$file);
     //    return response()->download( $file_path);
    	 //PDF file is stored under project/public/download/info.pdf
		   /* $file= public_path(). "/assets/file/".$file;

		    $headers = array(
		              'Content-Type: application/pdf',
		            );*/

		   // return Response::download($file, 'filename.pdf', $headers);
    	/*return Storage::disk('public')->download('public/assets/file/'.$file);*/
       return response()->download('assets/file/'.$file);

    	//return Storage::download($file);
    	//return Storage::download($file, 'ashik.pdf', $headers);
    }

    public function Syllabus()
    {
        $user = Auth::user()->email;
        $mistakes = Mistake::where('email',$user)
       ->get();
        $count = $mistakes->count();
      return view('frontend.syllabus',compact('count'));
    }
}
