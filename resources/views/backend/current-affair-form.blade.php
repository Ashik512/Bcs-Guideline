@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">


            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Curent Affair</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('save-current-affair')}}">
                @csrf

                <div class="card-body">
                 
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label>Ans</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="ans" placeholder="Ans">
                  </div>

                   <div class="form-group">
                    <label>Hints</label>
                    <textarea class="form-control" name="hints" rows="3">
                    </textarea>
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