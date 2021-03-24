@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around ">
<div class="col-md-10 mt-4">

            <div class="card card-primary">
              <div class="card-header bg-primary">

                <h3 class="card-title">Add Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('save-details')}}">
                @csrf

                <div class="card-body">

                  <div class="form-group">
                    <label>Chapter Name</label>
                      <div class="col-sm-9">
                                                
                        <select class="form-control" name="chapter_name" required >
                          <option value="" disabled selected>Please select Chapter.</option>        
                          @foreach($chapters as $chapter)
                           
                          <option value="{{ $chapter->id }}"> {{ $chapter->chapter_name }} </option>
                          @endforeach
                        </select>

                      </div>
                  </div>

                  <div class="form-group">
                    <label>Add Title</label>
                    <input type="text" class="form-control" name="chapter_title" placeholder="Chapter Title">
                  </div>
                 
                 
                  <div class="form-group">
                    <label>Add Details</label>
                    <textarea class="form-control" name="chapter_details" rows="3">
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

       <script>
          CKEDITOR.replace( 'chapter_details' );
       </script>


@endsection