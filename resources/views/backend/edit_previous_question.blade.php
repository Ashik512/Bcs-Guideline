@extends('backend.adminmaster')

@section('content')

 <div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Edit Previous Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('update-previous-question',$question->id)}}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label>Bcs No</label>
                      <div class="col-sm-9">
                                                
                      <input type="text" value="{{$question->bcsno}}" class="form-control" name="bcsno" placeholder="Bcs No">

                      </div>
                  </div>

                   <div class="form-group">
                    <label>Question</label>
                  
                    <textarea class="form-control" name="question" rows="3">{{$question->question}}</textarea>
                    
                  </div>

                   <div class="form-group">
                    <label>option-1</label>
                    <input type="text" value="{{$question->opt1}}" class="form-control" name="opt1" placeholder="option-1">
                  </div>

                  <div class="form-group">
                    <label>option-2</label>
                    <input type="text" value="{{$question->opt2}}" class="form-control" name="opt2" placeholder="option-1">
                  </div>

                  <div class="form-group">
                    <label>option-3</label>
                    <input type="text" value="{{$question->opt3}}" class="form-control" name="opt3" placeholder="option-3">
                  </div>

                  <div class="form-group">
                    <label>option-4</label>
                    <input type="text" value="{{$question->opt4}}" class="form-control" name="opt4" placeholder="option-4">
                  </div>

                   <div class="form-group">
                    <label>Answer</label>
                    <select class="form-control"name="ans" required >
                        <option value="" disabled selected>Please select Ans.</option>
                        @if($question->ans == 1)
                        <option value="1" selected>1</option>
                        @else
                        <option value="1" >1</option>
                        @endif

                        @if($question->ans == 2)
                        <option value="1" selected>2</option>
                        @else
                        <option value="2" >2</option>
                        @endif

                        @if($question->ans == 3)
                        <option value="3" selected>3</option>
                        @else
                        <option value="3" >3</option>
                        @endif

                        @if($question->ans == 4)
                        <option value="1" selected>4</option>
                        @else
                        <option value="4" >4</option>
                        @endif

                       
                      
                 </select>
                  </div>
                  
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>

          </div>
      </div>

@endsection