@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-6 mt-4">

            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Chapter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('save-chapter')}}">
                @csrf

                <div class="card-body">

                  <div class="form-group">
                    <label>Subject Name</label>
                      <div class="col-sm-9">
                                                
                        <select class="form-control" name="subject_name" required >
                          <option value="" disabled selected>Please select Subject.</option>        
                          @foreach($subjects as $subject)
                           
                          <option value="{{ $subject->id }}"> {{ $subject->subject_name }} </option>
                          @endforeach
                        </select>

                      </div>
                  </div>
                 
                 
                  <div class="form-group">
                    <label>Chapter Name</label>
                    <input type="text" class="form-control" name="chapter_name" placeholder="Chapter Name">
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