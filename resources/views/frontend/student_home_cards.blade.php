@extends('frontend.studentmaster')

@section('content')

<div class="row">
	<div class="col-md-4">

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
        </div>

          <div class="col-md-4">
       
          <div class="card mt-2">

            <div class="card-header bg-primary">
              <h3 class="card-title">Model Tests</h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body bg-primary">
             
              <ul >
                @foreach($models as $model)
                <a href="{{route('give-model-test',$model->model_code)}}" class="list-unstyled bg-success text-light" style="text-decoration: none">

                      <li class="mb-2">
                        <i class="fas fa-hand-point-right mr-2"></i>
                          {{$model->model_name}}
                      </li>
               </a>
                
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
        </div>

        <div class="col-md-4">

           <div class="card mt-2">

            <div class="card-header bg-primary">
              <h3 class="card-title">Recent Bcs Questions</h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body bg-primary">
             
              <ul >
                @foreach($bcs as $bcs)
                <a href="{{route('view-question',$bcs->bcs_no)}}" class="list-unstyled bg-success text-light" style="text-decoration: none">

                      <li class="mb-2">
                        <i class="fas fa-hand-point-right mr-2"></i>
                          {{$bcs->bcs_name}}
                      </li>
               </a>
                
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
          </div>

        </div>
          <!-- /.card -->

      </div>
       

@endsection