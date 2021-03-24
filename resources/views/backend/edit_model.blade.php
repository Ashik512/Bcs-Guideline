@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Edit Model Test</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('update-model',$model->id)}}">
              	@csrf

                <div class="card-body">
                  <div class="form-group">
                    <label>Edit Model Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$model->model_code}}" name="model_code" placeholder="Model Test Code">
                  </div>

                  <div class="form-group">
                    <label>Edit Model Test Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$model->model_name}}" name="model_name" placeholder="Model Test Name">
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