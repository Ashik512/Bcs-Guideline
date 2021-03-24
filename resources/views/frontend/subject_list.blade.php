@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-8 ">

<div class="card mt-2">

            <div class="card-header bg-primary">
              <h3 class="card-title">All Subjects</h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body bg-primary">
             
              <ul >
                @foreach($subjects as $subject)
                <a href="{{route('show-chapters',$subject->id)}}" class="list-unstyled bg-success text-light" style="text-decoration: none">

                      <li class="mb-2">
                        <i class="fas fa-hand-point-right mr-2"></i>
                          {{$subject->subject_name}}
                      </li>
               </a>
                
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>

      </div>
       

@endsection