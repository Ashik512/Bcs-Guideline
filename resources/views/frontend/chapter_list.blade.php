@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-10 ">

<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">All Chapters</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Chapter Name</th>
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
                  <td>{{$list->chapter_name}}</td>
                  <td> <a href="{{route('read-details',['id'=>$list->id,'chapter_name'=>$list->chapter_name])}}" style="text-decoration: none;"> <i class="nav-icon fas fa-book-reader mr-1"></i> Read Details</a></td>
                  
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