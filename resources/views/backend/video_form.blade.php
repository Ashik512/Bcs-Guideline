@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

{{-- @include('includes.message') --}}
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Videos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('videos-save')}}">
                @csrf

                <div class="card-body">
                 

                  <div class="form-group">
                    <label>Video Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                  </div>

                   <div class="form-group">
                    <label>Video Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Link">
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