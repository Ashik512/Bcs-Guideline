@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-8 ">

 {{--  @include('includes.message') --}}
<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Results of Given Test</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                
                <tr>
                  <td>User Name</td>
                  <td>{{$user_name}}</td>
                </tr>

                <tr>
                  <td>Total Question</td>
                  <td>{{$total}}</td>
                </tr>

                <tr>
                  <td>Total Correct</td>
                  <td>{{$marks}}</td>
                </tr>

                <tr>
                  <td>Total Wrong</td>
                  <td>{{$wrong}}</td>
                </tr>

                 <tr>
                  <td>Your Score</td>
                  <td>{{$marks}}</td>
                </tr>


                </tbody>
             
              </table>

            </div>
            <a href="{{route('view-sub-ans',$code)}}" class="btn btn-primary">View Answers</a>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>

      </div>

@endsection