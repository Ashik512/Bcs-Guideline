@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

{{-- @include('includes.message') --}}
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Bcs No</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('save-bcs')}}">
                @csrf

                <div class="card-body">
                 
                  <div class="form-group">
                    <label>Bcs No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="bcs_no" placeholder="Bcs No">
                  </div>

                  <div class="form-group">
                    <label>Bcs Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ old('bcs_name')}}" name="bcs_name" placeholder="Bcs Name">
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