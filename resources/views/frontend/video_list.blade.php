@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-10 ">

<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Videos List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Video Title</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($lists as $list)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$list->title}}</td>
                  <td> <a href="{{$list->link}}" target="_blank">Watch Video</a></td>
                  
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