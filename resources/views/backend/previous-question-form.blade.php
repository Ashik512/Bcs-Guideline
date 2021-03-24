@extends('backend.adminmaster')

@section('content')

 <div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Previous Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('save-previous-question')}}">
              	@csrf

                <div class="card-body">
                  <div class="form-group">
                    <label>Bcs No</label>
                      <div class="col-sm-9">

                        <select class="form-control" name="bcsno" required >
                          <option value="" disabled selected>Please select Model Test.</option>        
                          @foreach($models as $model)
                           
                          <option value="{{ $model->bcs_no }}"> {{ $model->bcs_name }} </option>
                          @endforeach
                        </select>
                                                
	                  {{--    <input type="number" class="form-control" name="bcsno" placeholder="Bcs No"> --}}

	                    </div>
                  </div>

                   <div class="form-group">
                    <label>Question</label>
                    <textarea class="form-control" name="question" rows="3">
                    </textarea>
                  </div>

                   <div class="form-group">
                    <label>option-1</label>
                    <input type="text" class="form-control" name="opt1" placeholder="option-1">
                  </div>

                  <div class="form-group">
                    <label>option-2</label>
                    <input type="text" class="form-control" name="opt2" placeholder="option-2">
                  </div>

                  <div class="form-group">
                    <label>option-3</label>
                    <input type="text" class="form-control" name="opt3" placeholder="option-3">
                  </div>

                  <div class="form-group">
                    <label>option-4</label>
                    <input type="text" class="form-control" name="opt4" placeholder="option-4">
                  </div>

                   <div class="form-group">
                    <label>Answer</label>
                    <select class="form-control"name="ans" required >
                        <option value="" disabled selected>Please select Ans.</option>
                        <option value="A">1</option>
                        <option value="B">2</option>   
                        <option value="C">3</option>   
                        <option value="D">4</option>
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