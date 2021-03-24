@extends('backend.adminmaster')

@section('content')
<br>
 <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$models}}</h3>

                <p>Total Model Test</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{-- {{route('total-model')}} --}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$question}}</h3>

                <p>Total Questions</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{-- {{route('total-ques')}} --}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$student}}</h3>

                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{-- {{route('total-student')}} --}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>


<div class="row justify-content-around">
	<div class="col-md-12">

<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Student List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>SL No</th>
                  <th>Student Name</th>
                  <th>Student Email</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($students as $student)
                <tr class="text-center">
                  <td>{{$i++}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->email}}</td>
                </tr>
                @endforeach

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>

      </div>

@endsection