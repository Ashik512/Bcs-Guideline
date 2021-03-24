@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

{{-- @include('includes.message') --}}
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Book Name</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" action="{{route('save-book')}}">
                @csrf

                <div class="card-body">
                 

                  <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" class="form-control" name="book_name" placeholder="Book Name">
                  </div>

                   <div class="form-group">
                    <label>Upload file</label>
                    <input type="file" class="form-control" name="file">
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