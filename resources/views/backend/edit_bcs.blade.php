@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Edit Bcs Test</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('update-bcs',$model->id)}}">
              	@csrf

                <div class="card-body">
                  <div class="form-group">
                    <label>Edit Bcs No</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$model->bcs_no}}" name="bcs_no" placeholder="Model Test Code">
                  </div>

                  <div class="form-group">
                    <label>Edit Bcs Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$model->bcs_name}}" name="bcs_name" placeholder="Bcs Name">
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