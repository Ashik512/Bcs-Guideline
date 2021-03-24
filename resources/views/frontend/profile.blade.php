@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Your Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('update-profile',$profile->email)}}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" class="form-control" value="{{$profile->name}}" name="name" placeholder="Your Name">
                  </div>

                  <div class="form-group">
                    <label>Your Email</label>
                    <input type="text" class="form-control" value="{{$profile->email}}" name="email" placeholder="Your Email" disabled>
                  </div>
                  
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-primary">Update</button>
                </div>

              </form>
            </div>

          </div>
      </div>


@endsection